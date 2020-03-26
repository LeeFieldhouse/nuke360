<?php
namespace App\Traits;
use Carbon\Carbon;
use Laravel\Nova\Nova;

trait PublishedTrait{
	
	protected static function boot()
	{
		parent::boot(); // TODO: Change the autogenerated stub
		
		self::addGlobalScope(
			'published',
			function ($query) {
				if (!Nova::$authUsing) {
					return $query
						->whereNotNull('publish_at')
						->where('publish_at', '<=', Carbon::now());
				}
				
				return $query;
			}
		);
		
	}
	
	public function getPublishedAttribute()
	{
		if(filled($this->publish_at) && $this->publish_at <= Carbon::now()){
			return true;
		}

		return false;
	}
	

	
}
