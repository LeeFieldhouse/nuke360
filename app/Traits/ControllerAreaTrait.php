<?php

namespace App\Traits;

use App\Modules\Areas\Area;

trait ControllerAreaTrait{
	protected $area;
	
	public function __construct()
	{
		$this->area = Area::where(
			'route_name',
			\Illuminate\Support\Facades\Route::currentRouteName()
		)->first();
	}
}