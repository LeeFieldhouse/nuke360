<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

trait ImageWithThumbResizeTrait
{
	public function resizeImageWithThumb($attribute_name, $value, $folder_name, $image_width = 1200, $image_thumb_width = 350, $image_height = NULL, $image_thumb_height = null)
	{
//		if(app()->runningInConsole()){
//			$this->attributes[$attribute_name] = $value;
//			return false;
//		}
		
		
		$value = str_replace('/storage', '', $value);
		$original_image = Image::make(Storage::get('/public/'.$value))->encode();
		$thumb_image = Image::make(Storage::get('/public/'.$value))->resize($image_thumb_width, $image_thumb_height, function ($constraint) {
			$constraint->aspectRatio();
		})->encode();
		$resized_image = Image::make(Storage::get('/public/'.$value))->resize($image_width, $image_height, function ($constraint) {
			$constraint->aspectRatio();
		})->encode();
		
		$this->saveImages($folder_name, $value, $thumb_image, $resized_image, $original_image, $attribute_name);
	}
	
	// Fit image, generate thumb and resize thumb
	public function fitImageWithThumb($attribute_name, $value, $folder_name, $image_width = 1200, $image_thumb_width = 350, $image_height = NULL, $image_thumb_height = null)
	{
		
		$value = str_replace('/storage', '', $value);
		$original_image = Image::make(Storage::get('/public/'.$value))->encode();
		$thumb_image = Image::make(Storage::get('/public/'.$value))->fit($image_thumb_width, $image_thumb_height)->encode();
		$resized_image = Image::make(Storage::get('/public/'.$value))->fit($image_width, $image_height)->encode();
		
		$this->saveImages($folder_name, $value, $thumb_image, $resized_image, $original_image, $attribute_name);
	}
	
	// Fit image, generate thumb and resize thumb
	public function constrainImageWithThumb($attribute_name, $value, $folder_name, $image_width, $image_thumb_width, $image_height = NULL, $image_thumb_height = null)
	{
		
		$value = str_replace('/storage', '', $value);
		$original_image = Image::make(Storage::get('/public/'.$value))->encode();
		$thumb_image = Image::make(Storage::get('/public/'.$value))->fit($image_thumb_width, $image_thumb_height)->encode();
		$resized_image = Image::make(Storage::get('/public/'.$value))->resize($image_width, $image_height, function($const){
			$const->aspectRatio();
			$const->upsize();
		})->encode();
		
		$this->saveImages($folder_name, $value, $thumb_image, $resized_image, $original_image, $attribute_name);
	}
	
	
	public function saveImages($folder_name, $value, $thumb_image, $resized_image, $original_image, $attribute_name){
		// Create the directory for thumbnails
		$thumb_directory = '/public/'.$folder_name.'/images/thumbnails/';
		$resized_image_directory = '/public/'.$folder_name.'/images/';
		$original_image_directory = '/public/'.$folder_name.'/images/originals/';
		Storage::makeDirectory($thumb_directory);
		Storage::makeDirectory($original_image_directory);
		
		// Create the file name
		$thumb_name = 'thumb_' . basename($value);
		$resized_image_name = basename($value);
		$original_name = basename($value);
		
		// Give path to file
		$thumb_path = $thumb_directory . $thumb_name;
		$resized_image_path = $resized_image_directory . $resized_image_name;
		$original_path = $original_image_directory . $original_name;
		
		// Url to file
		$url_thumb_path = $folder_name. '/images/thumbnails/' . $thumb_name;
		$url_image_path = $folder_name . '/images/' . $resized_image_name;
		$url_original_path = $folder_name . '/images/originals/' . $original_name;
		Storage::put(
			$thumb_path,
			$thumb_image
		);
		Storage::put(
			$resized_image_path,
			$resized_image
		);

		Storage::put(
			$original_path,
			$original_image
		);
		$this->attributes[$attribute_name.'_thumb'] = str_replace('//', '/', $url_thumb_path);
		$this->attributes[$attribute_name] = str_replace('//', '/', $url_image_path);
		ImageOptimizer::optimize(storage_path() . '/app/public/'. $this->attributes[$attribute_name]);
		ImageOptimizer::optimize(storage_path() . '/app/public/'. $this->attributes[$attribute_name.'_thumb']);
		if(!app()->runningInConsole()){
			$this->save();
		}
	}
	
	
	
	
}
