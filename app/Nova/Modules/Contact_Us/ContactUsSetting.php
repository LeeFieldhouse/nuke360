<?php

namespace App\Nova\Modules\Contact_Us;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class ContactUsSetting extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Modules\Contact_Us\ContactUsSetting::class;
	
	public static $group = 'Contact Us';
	
	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title;
	
	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
	];
	
	public static function authorizedToCreate(Request $request)
	{
		return FALSE;
	}
	
	public function authorizedToDelete(Request $request)
	{
		return FALSE;
	}
	
	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			ID::make()->sortable(),
			Text::make('Email Displayed', 'email'),
			Text::make('Contact Form Send To Email (won\'t be seen by visitors', 'contact_form_email'),
			Code::make('Google Map iFrame (insert whole iFrame)', 'google_map_iframe'),
			Text::make('content'),
			Text::make('phone'),
			Textarea::make('address'),
		];
	}
	
	/**
	 * Get the cards available for the request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function cards(Request $request)
	{
		return [];
	}
	
	/**
	 * Get the filters available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function filters(Request $request)
	{
		return [];
	}
	
	/**
	 * Get the lenses available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function lenses(Request $request)
	{
		return [];
	}
	
	/**
	 * Get the actions available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function actions(Request $request)
	{
		return [];
	}
}
