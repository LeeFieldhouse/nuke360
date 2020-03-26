<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Modules\Mailchimp\MailchimpController;
use App\Modules\Areas\Area;
use App\Enquiry;
use App\Mail\ContactFormMail;
use App\Modules\Contact_Us\ContactUsSetting;
use App\Rules\Captcha;
use App\Traits\ControllerAreaTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use ReCaptcha\ReCaptcha;

class ContactFormController extends Controller
{
	use ControllerAreaTrait;
	
	public function index()
	{
		return view('pages.contact.index', [
			'area' => $this->area
		]);
	}
	
	public function store(Request $request)
	{
		//Sends email for contact form
		$val = Validator::make(
			$request->toArray(),
			[
				'name'          => 'required',
				'email_address' => 'required|email',
				'phone_number'  => 'required',
				'enquiry'       => 'required|min:3',
                recaptchaFieldName() => recaptchaRuleName()
			]
		);
		if($val->fails()){
			return redirect('/contact-us#contact')->withErrors($val);
		}
		$email = request('email_address');
		$data =
			[
				'name'          => $request->name,
				'email_address' => $email,
				'phone_number'  => $request->phone_number,
				'enquiry'       => $request->enquiry,
				//				'enquiry_type' => $request->enquiry_type
			];
		
		//Get admin email addresses
		$admin_emails = ContactUsSetting::first()->contact_form_email;
		//End get admin email addresses
		
		//Send email
		Mail::to($admin_emails)->send(
			new ContactFormMail($data)
		);
		//End send email
		//Save enquiry
		Enquiry::create($data);
		//End save enquiry
        
        if(request()->input('subscribe_to_newsletter') == 1){
            (new MailchimpController())->store($email, ['FNAME' => Str::before(request('name'), ' '), 'LNAME' => Str::afterLast(request('name'), ' ')]);
        }
		
		return redirect()->back()->with(
			[
				'success' => 'We will get back to you soon'
			]
		);
		
	}
}
