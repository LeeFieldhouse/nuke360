<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToProvider()
    {
        /**
         * Redirect the user to the GitHub authentication page.
         *
         * @return void
         */

        return Socialite::driver('facebook')->redirect();
    }
    
        /**
         * Obtain the user information from GitHub.
         *
         * @return void
         */
        public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
    
        // $user->token;
    }
    }
}
