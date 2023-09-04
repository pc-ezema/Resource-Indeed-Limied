<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Query;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class HomePageController extends Controller
{
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
                'address'=>'required',
                'zip_code' => 'required',
                'course' => 'required'
             ],$messages);

            //  Store data in database
            Training::create([
                'title' => $request->get('title'),
                'last_name' => $request->get('last_name'),
                'first_name' => $request->get('first_name'),
                'middle_name' => $request->get('middle_name'),
                'email' => $request->get('email'),
                'company' => $request->get('company'),
                'position' => $request->get('position'),
                'phone_number' => $request->get('phone_number'),
                'address' => $request->get('address'),
                'zip_code' => $request->get('zip_code'),
                'course' => $request->get('course'),
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
                'address' => $request->get('address'),
                'zip_code' => $request->get('zip_code'),
                'course' => $request->get('course'),
                'created_at' => now()
            ), function($message) use ($request){
                $message->from($request->email);
                $message->to('info@resourceindeed.com', 'Admin')->subject('Participant Registration Form');
            });

            return back()->with('success', 'Thank you for registering!');
        }

        if ($request->isMethod('get'))
        {
            return view('training');
        }
    }
}
