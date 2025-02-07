<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Contact;
use App\Models\Course;
use App\Models\ElearningEnrollment;
use App\Models\Job;
use App\Models\Notification;
use App\Models\Query;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;
use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    private $gateway;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(false);
    }

    public function index()
    {
        SEOTools::setTitle('Connecting organisations with the talent they need to realise their ambitions.');
        SEOTools::setDescription('Resource Indeed supports organisations to build, connect and optimise their workforce to face the challenges of tomorrow. We redefine work so everyone has a lifetime of opportunity. A leading global provider of outsourced recruitment and consultancy solutions');

        return view('welcome');
    }

    public function about()
    {
        SEOTools::setTitle('Helping you achieve your goals and identify new opportunities.');
        SEOTools::setDescription('Our focus is to not only deliver strategies that perform, but to identify new opportunities using data, expertise and technology resulting in simpler, smarter and faster talent solutions.');

        return view('about');
    }

    public function contact()
    {
        SEOTools::setTitle('Get in touch with the right people at Resource Indeed.');
        SEOTools::setDescription('If you are requesting a reference please contact info@resourceindeed.com');

        return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        $messages = [
            'service.required' => 'Service is required.',
            'first_name.required' => 'First Name is required.',
            'last_name.required' => 'Last Name is required.',
            'job_title.required' => 'Job Title is required.',
            'company_name.required' => 'Company Name is required.',
            'industry.required' => 'Industry is required.',
            'email.required' => 'Valid email is required.',
            'phone_number.required' => 'Valid Phone Number is required.',
            'country.required' => 'Country is required.',
            'msg.required' => 'Please, leave us a message.',
        ];

        // Form validation
        $this->validate($request, [
            'service' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'job_title' => 'required',
            'company_name' => 'required',
            'industry' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'country'=>'required',
            'msg' => 'required'
         ], $messages);

        //  Store data in database
        Contact::create([
            'service' => $request->get('service'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'job_title' => $request->get('job_title'),
            'company_name' => $request->get('company_name'),
            'industry' => $request->get('industry'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'country'=> $request->get('country'),
            'msg' => $request->get('msg'),
        ]);

        //  Send mail to admin
        Mail::send('emails.contact', array(
            'service' => $request->get('service'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'job_title' => $request->get('job_title'),
            'company_name' => $request->get('company_name'),
            'industry' => $request->get('industry'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'country'=> $request->get('country'),
            'msg' => $request->get('msg'),
            'created_at' => now()
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('info@resourceindeed.com', 'Admin')->subject('Contact Form');
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

    public function ict_solutions()
    {
        SEOTools::setTitle('From Fintech to IT services, find the qualified talent you need to take your company to the next level.');
        SEOTools::setDescription('Resource Indeed are helping some of the largest organisations focus on accelerating digital transformation efforts by creating the specialist workforce needed to realise their ambitions.  ');

        return view('services.ict_solutions');
    }

    public function financial_services()
    {
        SEOTools::setTitle('From global banking to insurance, we provide a reliable and responsive service to help you attract the right talent.');
        SEOTools::setDescription('Our current portfolio of Financial Services clients ranges from global brands to boutique enterprises across Commercial banking, Investment banking, Insurance, Asset management, Wealth management and Fintech.');

        return view('services.financial_services');
    }

    public function general_resources()
    {
        SEOTools::setTitle('Our rich understanding of each industry’s talent needs is supported by years of experience, enabling us to deliver bespoke solutions for your organisation.');
        SEOTools::setDescription('Our current portfolio of General Resource, we can help you pipeline talent for future, large scale projects and ramp-up to meet rapid business expansion and growth targets.');

        return view('services.general_resources');
    }

    public function human_capital_development()
    {
        SEOTools::setTitle('Our rich understanding of each industry’s talent needs is supported by years of experience, enabling us to deliver bespoke solutions for your organisation.');
        SEOTools::setDescription('we specialize in moving, business functions to emerging or low-cost locations, source and secure volume, niche, and qualified professionals. Reduce recruitment costs and time-to-hire metrics. Build a compelling employer brand and improve candidate experience');

        return view('services.human_capital_development');
    }

    public function queryForm(Request $request)
    {
        $messages = [
            'service.required' => 'Field is required.',
            'name.required' => 'Name is required.',
            'phone.required' => 'Valid Phone Number is required.',
        ];

        // Form validation
        $this->validate($request, [
            'service' => 'required',
            'name' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
         ], $messages);

        //  Store data in database
        Query::create([
            'service' => $request->get('service'),
            'name' => $request->get('name'),
            'phone' => $request->get('phone')
        ]);

        //  Send mail to admin
        Mail::send('emails.query', array(
            'service' => $request->get('service'),
            'name' => $request->get('name'),
            'phone_number' => $request->get('phone'),
            'created_at' => now()
        ), function($message) use ($request){
            $message->from('no-reply@resourceindeed.com');
            $message->to('info@resourceindeed.com', 'Admin')->subject('Query Form');
        });

        return back()->with('success', 'Thank you! We will be in touch.');
    }

    public function training(Request $request)
    {

        if ($request->isMethod('post'))
        {
            $messages = [
                'title.required' => 'Title is required.',
                'last_name.required' => 'Last Name is required.',
                'first_name.required' => 'First Name is required.',
                'middle_name.required' => 'Middle Name is required.',
                'email.required' => 'Valid email is required.',
                'position.required' => 'Position is required.',
                'phone_number.required' => 'Valid Phone Number is required.',
                'date_of_birth.required' => 'Date of birth is required.',
                'address.required' => 'Address is required.',
                'zip_code.required' => 'Zip code is required.',
                'course.required' => 'Please select a training course.',
            ];

            // Form validation
            $this->validate($request, [
                'title' => 'required',
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'email' => 'required|email',
                'company' => 'nullable',
                'position' => 'required',
                'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'date_of_birth' => 'required',
                'address'=>'required',
                'zip_code' => 'required',
                'course' => 'required'
             ],$messages);

            $course = Course::where('name', $request->get('course'))->first();

            //  Store data in database
            $training = Training::create([
                'title' => $request->get('title'),
                'last_name' => $request->get('last_name'),
                'first_name' => $request->get('first_name'),
                'middle_name' => $request->get('middle_name'),
                'email' => $request->get('email'),
                'company' => $request->get('company'),
                'position' => $request->get('position'),
                'phone_number' => $request->get('phone_number'),
                'date_of_birth' => $request->get('date_of_birth'),
                'address' => $request->get('address'),
                'zip_code' => $request->get('zip_code'),
                'course' => $request->get('course'),
                'status' => 'Unpaid'
            ]);

            //  Send mail to admin
            Mail::send('emails.training', array(
                'title' => $request->get('title'),
                'last_name' => $request->get('last_name'),
                'first_name' => $request->get('first_name'),
                'middle_name' => $request->get('middle_name'),
                'email' => $request->get('email'),
                'company' => $request->get('company'),
                'position' => $request->get('position'),
                'phone_number' => $request->get('phone_number'),
                'date_of_birth' => $request->get('date_of_birth'),
                'address' => $request->get('address'),
                'zip_code' => $request->get('zip_code'),
                'course' => $request->get('course'),
                'created_at' => now(),
            ), function($message) use ($request){
                $message->from($request->email);
                $message->to('training@resourceindeed.com', 'Admin')->subject('Participant Registration Form');
            });

            if($request->pay_by_transfer == 'Pay By Transfer')
            {
                return redirect()->route('complete.transfer', Crypt::encrypt($training->id));
            }

            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $course->price,
                    'description' => $training->id,
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => route('success.payment'),
                    'cancelUrl' => route('cancel.payment')
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect();
                }
                else {
                    return back()->with(
                        'danger',
                        $response->getMessage()
                    );
                }
            } catch (\Throwable $th) {
                return back()->with(
                    'danger',
                    $th->getMessage()
                );
            }

            return back()->with('success', 'Thank you for registering!');
        }

        if ($request->isMethod('get'))
        {
            $courses = Course::get();

            return view('training', [
                'courses' => $courses
            ]);
        }
    }

    public function e_learning_form(Request $request)
    {
        if ($request->isMethod('post'))
        {
            // Form validation
            $this->validate($request, [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'gender' => 'required|in:male,female,other',
                'current_grade' => 'required|string|max:255',
                'nationality' => 'required|string|max:255',
                'parent_name' => 'required|string|max:255',
                'relationship' => 'required|in:father,mother,guardian',
                'phone_number' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:255',
                'medical_conditions' => 'required|in:yes,no',
                'medical_details' => 'nullable|string|max:255',
                'medications' => 'required|in:yes,no',
                'medication_details' => 'nullable|string|max:255',
                'start_date' => 'required|date',
                'special_needs' => 'required|in:yes,no',
                'special_needs_details' => 'nullable|string|max:255',
                'online_recording_consent' => 'required|in:yes,no',
                'photo_video_consent' => 'required|in:yes,no',
                'payment_plan' => 'required|in:weekly,monthly,quarterly,annually',
                // 'payment_method' => 'required|in:bank_transfer,credit_debit_card,other',
                'signature_name' => 'required|string|max:255',
                'signature_date' => 'required|date',
            ]);

            // Submit function
            try {
                DB::beginTransaction();

                $enrollmentData = $request->only([
                    'first_name', 'last_name', 'date_of_birth', 'gender', 'current_grade',
                    'nationality', 'parent_name', 'relationship', 'phone_number', 'email',
                    'address', 'medical_conditions', 'medical_details', 'medications',
                    'medication_details', 'start_date', 'special_needs', 'special_needs_details',
                    'online_recording_consent', 'photo_video_consent', 'payment_plan',
                    'signature_name', 'signature_date'
                ]);

                // Save data into database
                $enrollment = ElearningEnrollment::create($enrollmentData);


                // Send email notification
                Mail::send('emails.elearning', $request->all(), function ($message) use ($request) {
                    $message->from($request->email ?? 'noreply@example.com');
                    $message->to('training@resourceindeed.com', 'Admin')
                        ->subject('Participant Registration Form');
                });

                DB::commit();

                // Redirect with success message
                return redirect()->back()->with('success', 'Enrollment form submitted successfully!');

            } catch (\Exception $e) {
                DB::rollBack();

                // Log the error
                Log::error('Enrollment submission failed: ' . $e->getMessage());

                // Redirect back with error message
                return redirect()->back()->withInput()->with('error', 'An error occurred while submitting the form. Please try again.');
            }
        }

        if ($request->isMethod('get'))
        {
            return view('emails.elearning');
        }
    }

    public function completeTransfer($id)
    {
        $finder = Crypt::decrypt($id);

        $training = Training::find($finder);

        return view('completeTransfer', [
            'training' => $training
        ]);
    }

    public function complete(Request $request)
    {
        $messages = [
            'title.required' => 'Title is required.',
            'last_name.required' => 'Last Name is required.',
            'first_name.required' => 'First Name is required.',
            'middle_name.required' => 'Middle Name is required.',
            'email.required' => 'Valid email is required.',
            'phone_number.required' => 'Valid Phone Number is required.',
            'msg.required' => 'Message field is required.',
        ];

        // Form validation
        $this->validate($request, [
            'title' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'msg' => 'required',
        ],$messages);

        //  Send mail to admin
        Mail::send('emails.complete', array(
            'title' => $request->get('title'),
            'last_name' => $request->get('last_name'),
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'msg' => $request->get('msg'),
            'created_at' => now(),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('training@resourceindeed.com', 'Admin')->subject('Pay By Transfer Form');
        });

        return back()->with('success', 'Thank you for registering!');
    }

    public function paymentSuccess(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $training = Training::find($arr['transactions'][0]['description']);

                $training->update([
                    'status' => 'Paid'
                ]);

                return back()->with(
                    'success',
                    'Thank you, Your training application has been successfully submitted.'
                );
            }
            else{
                return back()->with(
                    'danger',
                    $response->getMessage()
                );
            }
        }
        else{
            return back()->with(
                'danger',
                'Payment declined!!'
            );
        }
    }

    public function paymentCancel()
    {
        return back()->with(
            'danger',
            'User declined the payment!'
        );
    }

    public function jobs()
    {
        return view('jobs');
    }

    public function getJobs()
    {
        return response()->json([
            'success' => true,
            'jobs' => Job::latest()->where('status', 'Active')->get()
        ]);
    }

    public function searchJobs(Request $request)
    {
        $searchQuery = $request->input('searchQuery');
        $locationQuery = $request->input('locationQuery');

         // Implement your job search logic here
        $jobsQuery = Job::latest()->where('status', 'Active');

        if ($searchQuery) {
            // Search for job title, workplace type, job type, or company
            $jobsQuery->where(function ($query) use ($searchQuery) {
                $query->where('title', 'like', "%$searchQuery%")
                    ->orWhere('workplace_type', 'like', "%$searchQuery%")
                    ->orWhere('job_type', 'like', "%$searchQuery%")
                    ->orWhere('company', 'like', "%$searchQuery%");
            });
        }

        if ($locationQuery) {
            // Search for City, state, country
            $jobsQuery->where('location', 'like', "%$locationQuery%");
        }

        $jobs = $jobsQuery->distinct()->get();

        return response()->json([
            'success' => true,
            'jobs' => $jobs
        ]);
    }

    public function submitApplication(Request $request)
    {
         // Validate the form data
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048', // Adjust the file size limit as needed
        ]);

        try {
            $job = Job::find($request->jobId);

            if (!$job) {
                return back()->with(
                    'danger',
                    'Job not found in our database.'
                );
            }

            $application = Applicant::where('name', $request->name)->orWhere('email', $request->email)->orWhere('phone', $request->phone)->exists();

            if ($application) {
                return back()->with(
                    'danger',
                    'You already applied for this job.'
                );
            }

            $file = uniqid(5).'-'.$request->resume->getClientOriginalName();
            $filesize = $request->resume->getSize();
            $fileextension = $request->resume->extension();
            $filename = pathinfo($file, PATHINFO_FILENAME);

            request()->resume->storeAs('applicants_resume', $file, 'public');

            if($job->status == 'Active')
            {
                $status = 'Applied';
            } else {
                $status = 'In-progress';
            }

            $apply = Applicant::create([
                'job_id' => $job->id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'resume' => '/storage/applicants_resume/'.$file,
                'resume_type' => $fileextension,
                'resume_name' => $file,
                'resume_size' => $filesize,
                'status' => $status
            ]);

            Notification::create([
                'to' => $job->user_id,
                'title' => 'New Applicant',
                'body' => 'A new applicant has applied for the job.',
                'image' => config('app.url').'/images/icons/favicon.png',
            ]);

            $name = $request->name;

            /** Store information to include in mail in $data as an array */
            $data = array(
                'company' => $job->company,
                'logo' => $job->logo,
                'title' => $job->title,
                'location' => $job->location,
                'date' => $apply->created_at,
                'user_details' => $name,
                'user_name' => $name ?? 'Anonymous' ,
                'user' => $request->email,
                'post_by' => $job->applicant_collection_email_address ?? User::find($job->user_id)->email,
                'applicant_email' => $apply->email,
                'applicant_phone' => $apply->phone,
                'resume' => $apply->id
            );

            /** Send message to the applicant */
            Mail::send('emails.applicant_notify', $data, function ($m) use ($data) {
                $m->to($data['user'])->subject($data['user_name'].', your application was sent to '.$data['company']);
            });

            /** Send message to the job poster */
            Mail::send('emails.job_notify', $data, function ($m) use ($data) {
                $m->to($data['post_by'])->subject('New application: '.$data['title'].' from '.$data['user_name']);
            });

            return back()->with(
                'success',
                'Your application was sent to '.$job->company,
            );
        } catch (\Throwable $th) {
            return back()->with(
                'danger',
                $th->getMessage()
            );
        }
    }

    public function downloadResume($id)
    {
        $finder = Crypt::decrypt($id);
        $applicant = Applicant::find($finder);

        // Check if the resume file exists
        $resumePath = str_replace("storage", "public", $applicant->resume);
        if (Storage::exists($resumePath)) {
            $fileSize = Storage::size($resumePath);

            // Create a response with appropriate headers
            return response()->download(storage_path("app/{$resumePath}"), $applicant->name, [
                'Content-Length' => $fileSize,
                'Content-Type' => Storage::mimeType($resumePath),
            ]);
        } else {
            // Handle the case when the file doesn't exist
            return back();
        }
    }

    public function viewJob($id)
    {
        // Fetch job details from the database
        $job = Job::findOrFail($id);

        $job->update([
            'views' => $job->views + 1
        ]);

        // You can return a view or JSON response based on your needs
        return response()->json($job);
    }

}
