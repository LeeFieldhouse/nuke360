<?php

namespace App\Nova;

use App\Traits\Nova\SortableOptionsTrait;
use Illuminate\Http\Request;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ofcold\NovaSortable\SortableTrait;

class HomePageInfoCard extends Resource
{
	use SortableTrait;
	use SortableOptionsTrait;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\HomePageInfoCard::class;
	public static $group = 'Homepage';
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Title')->rules(['required']),
			Textarea::make('Content')->rules(['required']),
			Text::make('Button Text')->rules(['required']),
			Text::make('Button Url')->help('Use the full url')->rules(['required']),
			FilemanagerField::make('Image')->folder('public/home_page_info_cards')->displayAsImage()
				->hideFromIndex()->rules(['required']),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
