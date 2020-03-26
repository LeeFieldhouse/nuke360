<?php

namespace App\Modules\News;

use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
	public function posts()
	{
		return $this->belongsToMany(NewsPost::class);
    }
}
