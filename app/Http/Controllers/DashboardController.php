<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function dashboard()
    {
        $totalJobs = Job::where('user_id', Auth::user()->id)->get();
        $totalApplicants = Auth::user()->postedJobs->sum(function ($job) {
                                return $job->applicant->count();
                            });
        $totalActiveJobs = Job::where(['user_id' => Auth::user()->id, 'status' => 'Active'])->get();
        $totalClosedJobs = Job::where(['user_id' => Auth::user()->id, 'status' => 'Closed'])->get();
        $latestFiveNotifications = Notification::latest()->where('to', Auth::user()->id)->take(5)->get();
        $latestFiveApplicants = Auth::user()->postedJobs->flatMap(function ($job) {
                                    return $job->applicant->take(5);
                                });

        return view('user.dashboard', [
            'totalJobs' => $totalJobs,
            'totalApplicants' => $totalApplicants,
            'totalActiveJobs' => $totalActiveJobs,
            'totalClosedJobs' => $totalClosedJobs,
            'latestFiveNotifications' => $latestFiveNotifications,
            'latestFiveApplicants' => $latestFiveApplicants,
        ]);
    }

    public function account()
    {
        return view('user.account');
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
        $jobs = Job::latest()->with(['applicant'])->get();

        return view('user.jobs.index')->with([
            'jobs' => $jobs
        ]);
    }

    public function jobAdd()
    {
        return view('user.jobs.add');
    }

    public function jobPost(Request $request)
    {
        $this->validate($request, [
            'category' => ['nullable', 'string'],
            'title' => ['required', 'string'],
            'company' => ['required', 'string'],
            'logo' => 'required|mimes:jpeg,png,jpg|max:2000',
            'workplace_type' => ['required', 'string'],
            'location' => ['required', 'string'],
            'job_type' => ['required', 'string'],
            'description' => ['required', 'string', 'min:10'],
            'apply_link' => ['nullable', 'url'],
            'applicant_collection_email_address' => ['required', 'email'],
            'rejection_emails' => ['required']
        ]);

        if($request->rejection_emails == 'true')
        {
            $rejectionEmails = true;
        } else {
            $rejectionEmails = false;
        }

        $filename = uniqid(5).'-'.request()->logo->getClientOriginalName();
        request()->logo->storeAs('company_logo', $filename, 'public');

        $job = Job::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . rand(1111, 9999),
            'company' => $request->company,
            'logo' => '/storage/company_logo/'.$filename,
            'workplace_type' => $request->workplace_type,
            'location' => $request->location,
            'salary' => $request->salary,
            'job_type' => $request->job_type,
            'category' => $request->category,
            'description' => $request->description,
            'skills' => $request->skills,
            'apply_link' => $request->apply_link,
            'applicant_collection_email_address' => $request->applicant_collection_email_address,
            'rejection_emails' => $rejectionEmails,
            'status' => 'Active'
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Job posted successfully.'
        ]);
    }

    public function jobView($id)
    {
        $finder = Crypt::decrypt($id);

        $job = Job::find($finder)->load(['applicant']);

        return view('user.jobs.view',[
            'job' => $job
        ]);
    }

    public function jobEdit($id)
    {
        $finder = Crypt::decrypt($id);

        $job = Job::find($finder);

        return view('user.jobs.edit',[
            'job' => $job
        ]);
    }

    public function jobUpdate($id, Request $request)
    {
        $this->validate($request, [
            'category' => ['nullable', 'string'],
            'title' => ['required', 'string',],
            'company' => ['required', 'string',],
            'workplace_type' => ['required', 'string',],
            'location' => ['required', 'string',],
            'job_type' => ['required', 'string',],
            'description' => ['required', 'string', 'min:200'],
            'apply_link' => ['nullable', 'url'],
            'applicant_collection_email_address' => ['required', 'email'],
            'rejection_emails' => ['required']
        ]);

        $finder = Crypt::decrypt($id);

        $job = Job::find($finder);

        if($request->rejection_emails == 'true')
        {
            $rejectionEmails = true;
        } else {
            $rejectionEmails = false;
        }

        if(request()->has('logo'))
        {
            $this->validate($request, [
                'logo' => 'required|mimes:jpeg,png,jpg|max:2000',
            ]);

            $filename = uniqid(5).'-'.request()->logo->getClientOriginalName();
            if ($job->logo) {
                Storage::delete(str_replace("storage", "public", $job->logo));
            }
            request()->logo->storeAs('company_logo', $filename, 'public');

            // Update with the new logo
            $job->update([
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'slug' => Str::slug($request->title) . '-' . rand(1111, 9999),
                'company' => $request->company,
                'logo' => '/storage/company_logo/' . $filename,
                'workplace_type' => $request->workplace_type,
                'location' => $request->location,
                'salary' => $request->salary,
                'job_type' => $request->job_type,
                'category' => $request->category,
                'description' => $request->description,
                'skills' => $request->skills,
                'apply_link' => $request->apply_link,
                'applicant_collection_email_address' => $request->applicant_collection_email_address,
                'rejection_emails' => $rejectionEmails,
                'status' => 'Active'
            ]);
        } else {
            $job = $job->update([
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'slug' => Str::slug($request->title) . '-' . rand(1111, 9999),
                'company' => $request->company,
                // 'logo' => '/storage/company_logo/'.$filename,
                'workplace_type' => $request->workplace_type,
                'location' => $request->location,
                'salary' => $request->salary,
                'job_type' => $request->job_type,
                'category' => $request->category,
                'description' => $request->description,
                'skills' => $request->skills,
                'apply_link' => $request->apply_link,
                'applicant_collection_email_address' => $request->applicant_collection_email_address,
                'rejection_emails' => $rejectionEmails,
                'status' => 'Active'
            ]);
        }

        return back()->with([
            'type' => 'success',
            'message' => 'Job updated successfully.'
        ]);
    }

    public function jobDelete($id)
    {
        $finder = Crypt::decrypt($id);

        $job = Job::find($finder);

        $applicant = Applicant::where('job_id', $job->id)->get();

        if($applicant->count() > 0)
        {
            $applicant->delete();
        }

        if ($job->logo) {
            Storage::delete(str_replace("storage", "public", $job->logo));
        }

        $job->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Deleted successfully.'
        ]);
    }

    public function jobClose($id)
    {
        $finder = Crypt::decrypt($id);

        $job = Job::find($finder);

        $job->update([
            'status' => 'Closed'
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Job closed successfully.'
        ]);
    }

    public function notifications()
    {
        $allNotifications = Notification::latest('to', Auth::user()->id)->get();

        return view('user.notifications', [
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
