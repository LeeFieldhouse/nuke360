<?php

namespace App\Modules\Areas;

use App\Traits\ImageAttributeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class Area extends Model
{
	use ImageAttributeTrait;
	
	protected $guarded = [];
	
	public function getBannerImageAttribute($value)
	{
		return str_replace('//', '/', $this->getImage($value));
	}
	
	public function getBannerImageThumbAttribute($value)
	{
		return $this->getImageThumb($value);
	}
}
