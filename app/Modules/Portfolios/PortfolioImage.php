<?php

namespace App\Modules\Portfolios;

use App\Traits\ImageAttributeTrait;
use App\Traits\ImageWithThumbResizeTrait;
use App\Traits\SortableModelTrait;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
	use ImageWithThumbResizeTrait;
	use ImageAttributeTrait;
	use SortableModelTrait;
	
	protected $guarded = [];
	
	public function portfolio()
	{
		return $this->belongsTo(Portfolio::class);
	}
	
	public function type()
	{
		return $this->belongsTo(PortfolioType::class, 'portfolio_type_id');
	}
	
	public function getImageAttribute($value)
	{
		return $this->getImage($value);
	}
	
	public function getImageThumbAttribute($value)
	{
		return $this->getImageThumb($value);
	}
	
	public function setImageAttribute($value)
	{
	    $folder_name = function(){
	      if($this->portfolio){
	          return 'portfolios/'.$this->portfolio->id. '/images';
          }
	        return 'portfolios/images';
        };
		//		if(app()->runningInConsole()){
		//			$this->attributes['image'] = $value;
		//			return;
		//		}
		if (app()->runningInConsole()) {
			$this->fitImageWithThumb('image', $value, $folder_name, 800, 400, 450, 225);
		} else {
			
			$this->constrainImageWithThumb('image', $value, $folder_name, 1000, 400, NULL, 225);
		}
	}
}
