<?php

namespace App\Modules\Portfolios;

use App\Modules\Bedrooms\BedroomRange;
use App\Modules\Kitchens\KitchenRange;
use App\Modules\Reviews\Review;
use App\Traits\FeaturedImageAttributeTrait;
use App\Traits\ImageAttributeTrait;
use App\Traits\ImageWithThumbResizeTrait;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	use ImageAttributeTrait;
	use ImageWithThumbResizeTrait;
	
	protected $dates = [
		'completed_date'
	];
	
	protected static function boot()
	{
		parent::boot(); // TODO: Change the autogenerated stub
		if (!app()->runningInConsole()) {
			if(!auth('nova')) {
				self::addGlobalScope(
					'with_images',
					function ($query) {
						$query->whereHas(
							'images',
							function ($query) {
								return $query->whereNotNull('image');
							}
						);
					}
				);
			}
		}
	}
	
	public function kitchenRange()
	{
		return $this->belongsTo(KitchenRange::class, 'kitchen_range_id');
	}
    
    public function bedroomRange()
    {
        return $this->belongsTo(BedroomRange::class, 'bedroom_range_id');
    }
	
	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
	
	public function type()
	{
		return $this->belongsTo(PortfolioType::class, 'portfolio_type_id');
	}
	
	public function featuredReviews()
	{
		return $this->hasMany((Review::class)->where('is_featured', TRUE));
	}
	
	public function images()
	{
		return $this->hasMany(PortfolioImage::class);
	}
	
	
	public function getRelatedPortfolios($amount = 4)
	{
		return $this::where('portfolio_type_id', $this->type->id)->inRandomorder()->take($amount)->get();
	}
	
	public function getFeaturedImageAttribute($value)
	{
		return $this->getImage($value);
	}
	
	public function getFeaturedImageThumbAttribute($value)
	{
		return $this->getImageThumb($value);
	}
	
	public function setFeaturedImageAttribute($image)
	{
		// if you ignore console rules (true) you will create resizes image and a thumb and store it in the folders from the image you provide
		// ignore console rules does not working with url images!!
		// to make ignore console rules work you must use an image in our storage public folder
		$this->setImage('featured_image', $image, 'news_posts',  1200, 350, true, NULL, 400);
	}
	
//	public function setFeaturedImageAttribute($value)
//	{
//		$this->fitImageWithThumb('featured_image', $value, 'portfolios/'.$this->id, 1200, 350);
//	}
}