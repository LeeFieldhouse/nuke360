<?php

namespace App\Modules\News;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class NewsCategory extends Model
{
	protected $guarded = [];
	
	public function news()
	{
		return $this->belongsToMany(NewsPost::class);
    }
}
