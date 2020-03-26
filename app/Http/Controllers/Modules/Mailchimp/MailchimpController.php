<?php

namespace App\Http\Controllers\Modules\Mailchimp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Newsletter;

class MailchimpController extends Controller
{
    
    /**
     * store
     *
     * @param string $email
     * @param array $data
     * @param string $list
     * @return bool
     */
    public function store($email, $data = NULL, $list = NULL)
    {
        if(blank($data)){
            $subscribed = Newsletter::subscribeOrUpdate($email);
            if($this->checkSubscribe($subscribed)){
                return true;
            }
            
        }
        
        if($list == NULL) {
            $subscribed = Newsletter::subscribeOrUpdate($email, $data);
            if($this->checkSubscribe($subscribed)){
                return true;
            }
        }
        
        if($list != NULL){
            $subscribed = Newsletter::subscribeOrUpdate($email, $data, $list);
            if($this->checkSubscribe($subscribed)){
                return true;
            }
        }
        
        
        return false;
    }
    
    protected function checkSubscribe($subscribed){
        if($subscribed){
            Session::put(['subscribed' => true]);
            return TRUE;
        }
        
        return false;
    }
}
