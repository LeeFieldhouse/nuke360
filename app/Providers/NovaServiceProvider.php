<?php

namespace App\Providers;

use App\Admin;
use Illuminate\Support\Facades\Gate;
use Infinety\Filemanager\FilemanagerTool;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();
	}
	
	/**
	 * Register the Nova routes.
	 *
	 * @return void
	 */
	protected function routes()
	{
		Nova::routes()
			->withAuthenticationRoutes()
			->withPasswordResetRoutes()
			->register();
	}
	
	/**
	 * Register the Nova gate.
	 *
	 * This gate determines who can access Nova in non-local environments.
	 *
	 * @return void
	 */
	protected function gate()
	{
		$admins = [];
		(new Admin())->each(
			function ($admin) use (&$admins) {
				array_push($admins, $admin->email);
			}
		);
		Gate::define(
			'viewNova',
			function ($user) use ($admins) {
				return in_array($user->email, $admins);
			}
		);
	}
	
	/**
	 * Get the cards that should be displayed on the default Nova dashboard.
	 *
	 * @return array
	 */
	protected function cards()
	{
		return [
			new Help,
		];
	}
	
	/**
	 * Get the extra dashboards that should be displayed on the Nova dashboard.
	 *
	 * @return array
	 */
	protected function dashboards()
	{
		return [];
	}
	
	/**
	 * Get the tools that should be listed in the Nova sidebar.
	 *
	 * @return array
	 */
	public function tools()
	{
		return [
			new FilemanagerTool()
		];
	}
	
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
