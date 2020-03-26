<?php
namespace App\Traits;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

trait ImageAttributeTrait
{
	//This return image with /storage/ infront for the front end.
	//Does not run inside nova.
	
	public function getImage($value) // featured_image
	{
		if(Str::contains($value, 'public/')){
			$value = str_replace('public/', '', $value);
		}
		if (empty($value) || Str::contains(URL::current(), ['nova/admin', 'nova-api', 'nova']) || app()->runningInConsole()) {
			return $value;
		}
		
		return '/storage/' . $value;
	}
	
	public function getImageThumb($value) // featured_image
	{
		if (empty($value) || Str::contains(URL::current(), ['nova/admin', 'nova-api', 'nova']) || app()->runningInConsole()) {
			return $value;
		}
		
		return '/storage/' . $value;
	}
	
	public function setImage($attribute_name, $value, $folder_name, $image_width = 900, $image_thumb_width = 350, $ignore_console_rules = false, $image_height = null, $image_thumb_height = NULL)
	{
		if(Str::contains($value, 'public/')){
			$value = str_replace('public/', '', $value);
		}
		if(app()->runningInConsole() && !$ignore_console_rules){
			$this->attributes[$attribute_name] = $value;
			return;
		}
		
		$this->fitImageWithThumb($attribute_name, $value, $folder_name,  $image_width, $image_thumb_width, $image_height, $image_thumb_height);
	}
}
