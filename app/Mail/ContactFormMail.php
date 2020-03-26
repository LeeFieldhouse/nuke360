<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
	use Queueable, SerializesModels;
	
	protected $data;
	
	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($data)
	{
		$this->data = $data;
	}
	
	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
	    $subscribed = function(){
            if($this->data['subscribed'] == 1){
                return true;
            }
            
            return false;
        };
	    
		return $this->subject('Contact Form Enquiry - ' .$this->data['name'])
			->from($this->data['email_address'])
			->view('email.contact-form.enquiry',
				[
					'name' => $this->data['name'],
					'email_address' => $this->data['email_address'],
					'phone_number' => $this->data['phone_number'],
					'enquiry' => $this->data['enquiry'],
                    'subscribed' => $subscribed
				]);
	}
}
