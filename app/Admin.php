<?php

namespace App;

use App\Modules\News\NewsPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
	public function newsPosts()
	{
		return $this->hasMany(NewsPost::class, 'author_id');
	}
}
