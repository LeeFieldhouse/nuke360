<?php

namespace App\Nova\Modules\Areas;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Area extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Modules\Areas\Area::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'route_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'route_name',
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
        	Text::make('Route Name')
			->readonly(),
        	Text::make('Meta Title'),
        	Textarea::make('Meta Description'),
			Text::make('Bread Crumb')
            ->hideFromIndex(),
            Text::make('Banner Subtitle')
            ->nullable(),
			FilemanagerField::make('Banner Image')
                ->hideFromIndex()->displayUsing(
					function ($image) {
						Storage::makeDirectory('/public/areas/'.$this->id.'/banners');
						return \Illuminate\Support\Facades\Request::root(). '/storage/' .$image;
					})
				->folder('/public/areas/'.$this->id.'/banners'),
			Select::make('Banner Opacity')->options([
				'0' => '0', '30' => '30', '50' => '50', '70' => '70', '90' => '90'
			])
			
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
