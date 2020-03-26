<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
	}
	public function show(User $user_id)
	{
		$user = $user_id;
		
		return $user;
    }
}
