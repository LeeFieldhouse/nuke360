<?php

namespace App\Nova\Modules\Team;

use App\Nova\Resource;
use App\Traits\Nova\SortableOptionsTrait;
use Illuminate\Http\Request;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Ofcold\NovaSortable\SortableTrait;

class TeamMember extends Resource
{
	use SortableTrait;
	use SortableOptionsTrait;
	
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Modules\Teams\TeamMember::class;
	
	public static $group = 'Team Members';
	
	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'name';
	
	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'name',
	];
	
	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			Text::make('Name'),
			Text::make('Position'),
			Text::make('Hover Title', 'title')->nullable(),
			Textarea::make('Hover Content', 'content')->nullable(),
			FilemanagerField::make('Image')
				->folder('/team/team_members')
				->displayAsImage()->rules('required'),
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
