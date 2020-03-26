<?php

namespace App\Http\Controllers\Modules\Newsletter;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\Mailchimp\MailchimpController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubscribeController extends Controller
{
    public function footerSubscribe()
    {
        $email = request('email_address');
        
        if (filled($email)) {
            (new MailchimpController())->store($email);
            return 'yo';
        }
    }
}
