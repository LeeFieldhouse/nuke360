<?php
namespace App\Traits;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

trait BannerImageAttributeTrait
{
	//This return image with /storage/ infront for the front end.
	//Does not run inside nova.
	
	public function getBannerImageAttribute($value) // featured_image
	{
		if (empty($value) || Str::contains(URL::current(), ['nova/admin', 'nova-api']) || app()->runningInConsole()) {
			return $value;
		}
		
		return '/storage/' . $value;
	}
	
	public function getBannerImageThumbAttribute($value) // featured_image
	{
		if (empty($value) || Str::contains(URL::current(), ['nova/admin', 'nova-api']) || app()->runningInConsole()) {
			return $value;
		}
		
		return '/storage/' . $value;
	}
}
