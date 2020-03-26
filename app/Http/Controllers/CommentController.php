<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
	public function store($commentable_type, $commentable_id)
	{
		$input = request()->input();
		$comment = Comment::create([
			'commentable_type' => $commentable_type,
			'commentable_id' => $commentable_id,
			'content' => $input->content
		]);
		
		if($comment){
			Session::flash('success', 'Comment submitted!');
			return redirect()->back();
		}
    }
}
