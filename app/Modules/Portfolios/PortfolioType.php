<?php

namespace App\Modules\Portfolios;

use App\Range;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortfolioType extends Model
{
	protected $guarded = [];
	
	public function getRouteKeyName()
	{
		return 'slug';
	}
	
	public function ranges()
	{
		return $this->hasMany(Range::class);
    }
	
	public function images()
	{
		return $this->hasMany(PortfolioImage::class);
    }
    
	public function portfolios()
	{
		return $this->hasMany(Portfolio::class);
    }
}
