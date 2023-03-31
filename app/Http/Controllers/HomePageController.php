<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {
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

    public function information_technology()
    {
        return view('services.information_technology');
    }

    public function financial_service()
    {
        return view('services.financial_services');
    }

    public function general_resource()
    {
        return view('services.general_resource');
    }

    public function human_resource_management()
    {
        return view('services.human_resource_management');
    }

    public function professional_service()
    {
        return view('services.professional_services');
    }

    public function waste_management()
    {
        return view('services.waste_management');
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
}
