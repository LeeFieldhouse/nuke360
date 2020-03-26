<?php

namespace App\Providers;

use App\Modules\Areas\Area;
use App\Modules\Contact_Us\ContactUsSetting;
use App\SocialLink;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
	
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if (!app()->runningInConsole()) {
			View::share(
				[
					'settings' => ContactUsSetting::first(),
                    'social_links' => SocialLink::all()
				]
			);
		}
	}
}
