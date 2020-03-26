<?php

namespace App\Modules\Reviews;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $guarded = [];
	
	public function getFeaturedReviews(int $amount = 5)
	{
		return $this->where('is_featured', true)->inRandomOrder()->take($amount)->get();
	}
}
