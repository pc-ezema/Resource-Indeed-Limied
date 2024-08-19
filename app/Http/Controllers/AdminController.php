<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use App\Models\Notification;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function dashboard()
    {
        $totalJobs = Job::get();
        $totalApplicants = Applicant::get();
        $totalActiveJobs = Job::where(['status' => 'Active'])->get();
        $totalClosedJobs = Job::where(['status' => 'Closed'])->get();
        $fiveLatestTrainings = Training::take(5)->get();

        return view('admin.dashboard', [
            'totalJobs' => $totalJobs,
            'totalApplicants' => $totalApplicants,
            'totalActiveJobs' => $totalActiveJobs,
            'totalClosedJobs' => $totalClosedJobs,
            'fiveLatestTrainings' => $fiveLatestTrainings
        ]);
    }

    public function account()
    {
        return view('admin.account');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['nullable', 'numeric'],
            'sex' => ['nullable', 'string', 'max:255'],
        ]);

        $user = User::findorfail(Auth::user()->id);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Profile updated successfully!'
        ]);
    }

    public function updatePassword(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'new_password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $user = User::findorfail(Auth::user()->id);

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with([
            'type' => 'success',
            'message' => 'Password Updated Successfully.'
        ]);
    }

    public function uploadProfilePicture(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'required|mimes:jpeg,png,jpg',
        ]);

        $user = User::findorfail(Auth::user()->id);

        $filename = request()->avatar->getClientOriginalName();
        if($user->avatar) {
            Storage::delete(str_replace("storage", "public", $user->avatar));
        }
        request()->avatar->storeAs('users_avatar', $filename, 'public');
        $user->avatar = '/storage/users_avatar/'.$filename;
        $user->save();

        return back()->with([
            'type' => 'success',
            'message' => 'Profile Picture Uploaded Successfully!'
        ]);
    }

    public function jobs()
    {
        $jobs = Job::latest()->get();

        return view('admin.jobs', [
            'jobs' => $jobs
        ]);
    }

    public function trainings()
    {
        $trainings = Training::latest()->get();

        return view('admin.trainings', [
            'trainings' => $trainings
        ]);
    }

    public function notifications()
    {
        $allNotifications = Notification::latest('to', Auth::user()->id)->get();

        return view('admin.notifications', [
            'allNotifications' => $allNotifications
        ]);
    }

    public function readNotification($id)
    {
        $finder = Crypt::decrypt($id);

        $notification = Notification::find($finder);

        $notification->status = 'Read';
        $notification->save();

        return back();
    }
}
