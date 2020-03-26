<?php

namespace App\Traits\Nova;

use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Http\Requests\NovaRequest;

trait NextFolderAfterCreateTrait {
	
	public static function nextFolder($folder_name, $class)
	{
		Storage::makeDirectory('/public/'. $folder_name .'/'.($class::latest('id')->first() ? $class::latest('id')->first()->id + 1 : 1).'/images/thumbnails/');
	}
	
}
