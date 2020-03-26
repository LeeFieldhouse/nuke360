<?php
namespace App\Traits;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

trait FeaturedImageAttributeTrait
{
	//This return featured_image with /storage/ infront for the front end.
	//Does not run inside nova.
	
	public function getFeaturedImageAttribute($value) // featured_image
	{
		if (empty($value) || Str::contains(URL::current(), ['nova/admin', 'nova-api'])) {
			return $value;
		}
		
		return '/storage/' . $value;
	}
	
	public function getFeaturedImageThumbAttribute($value) // featured_image
	{
		if (empty($value) || Str::contains(URL::current(), ['nova/admin', 'nova-api'])) {
			return $value;
		}
		
		return '/storage/' . $value;
	}
}
