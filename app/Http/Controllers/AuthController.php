<?php

namespace App\Http\Controllers;

use App\Models\ResetCodePassword;
use App\Models\User;
use App\Notifications\SendCodeResetPassword;
use App\Notifications\SendVerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function authRegister(Request $request)
    {
        $messages = [
            'first_name.required' => 'First Name is required.',
            'last_name.required' => 'Last Name is required.',
            'email.required' => 'Valid email is required.',
            'password.min' => 'Password must be more than 8 characters long',
        ];

        // Form validation
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'email:rfc,strict', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
         ],$messages);


        $user = User::create([
            'account_type' => 'User',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'code' => mt_rand(1000, 9999),
            'password' => Hash::make($request->password),
        ]);

        // Send verification code to user
        $user->notify(new SendVerificationCode($user));

        return redirect()->route('verify')->with(
            'success',
            "Please check your email for a verification code to complete your registration."
        );
    }

    public function verify() {
        return view('auth.verify');
    }

    public function confirmCode(Request $request)
    {
        $user = User::where('code', $request->verificationCode)->first();
        if (!$user) {
            return back()->with(
                'danger',
                "This verification code is invalid."
            ); 
        }

        $user->email_verified_at = now();
        $user->code = null;
        $user->save();

        return redirect()->route('dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        $messages = [
            'email.required' => 'Valid email is required.',
            'password.min' => 'Password must be more than 8 characters long',
        ];

        // Form validation
        $this->validate($request, [
            'email' => ['required', 'string', 'email:rfc,strict', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
         ],$messages);

        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)) {
            return back()->with(
                'danger',
                'Incorrect Password!'
            ); 
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with(
                'danger',
                "Email doesn't exist"
            ); 
        }

        if($user->account_type == "Administrator")
        {
            return back()->with(
                'danger',
                "You are not a user."
            ); 
        }

        $input = $request->only(['email', 'password']);

        // authentication attempt
        if (auth()->attempt($input)) {
            if ($user->status !== 'Active') {
                return back()->with(
                    'danger',
                    "Account deactivated, please contact the site administrator!"
                ); 
            }

            if (!$user->email_verified_at) {

                $code = mt_rand(1000, 9999);

                $user->update([
                    'code' => $code
                ]);

                // Send verification code to user
                $user->notify(new SendVerificationCode($user));

                return redirect()->route('verify')->with(
                    'success',
                    "Before proceeding, please check your email for a verification code"
                );
            }

            return redirect()->route('dashboard');
        } else {
            return back()->with(
                'danger',
                "User authentication failed."
            ); 
        }
    }

    public function forgetPassword() {
        return view('auth.forget');
    }

    public function passwordResetEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
        ]);

        // Delete all old code that user send before.
        ResetCodePassword::where('email', $request->email)->delete();

        $user = User::where('email', $request->email)->first();

        $data['email'] = $request->email;
        
        // Generate random code
        $data['code'] = mt_rand(1000, 9999);

        // Create a new code
        $codeData = ResetCodePassword::create($data);

        // Send email to user
        $user->notify(new SendCodeResetPassword($codeData->code, $user));

        return redirect()->route('passwordReset')->with(
            'success',
            'We have emailed your password reset code.'
        );
    }

    public function passwordReset() {
        return view('auth.reset');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'code' => 'required|string|exists:reset_code_passwords',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        if (ResetCodePassword::where('code', '=', $request->code)->exists()) {
            // find the code
            $passwordReset = ResetCodePassword::firstWhere('code', $request->code);

            // check if it does not expired: the time is one hour
            if ($passwordReset->created_at > now()->addHour()) {
                $passwordReset->delete();

                return back()->with(
                    'danger',
                    "Password reset code expired."
                ); 
            }

            // find user's email 
            $user = User::firstWhere('email', $passwordReset->email);

            // update user password
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);

            // delete current code 
            $passwordReset->delete();

            return redirect()->route('login')->with('success', 'Password has been successfully reset, Please login');
        } else {
            return back()->with('danger', "Code doesnt exist in our database");
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }
}
