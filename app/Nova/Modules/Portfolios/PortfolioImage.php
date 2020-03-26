<?php

namespace App\Nova\Modules\Portfolios;

use App\Nova\Resource;
use App\Traits\Nova\SortableOptionsTrait;
use Illuminate\Http\Request;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Ofcold\NovaSortable\SortableTrait;

class PortfolioImage extends Resource
{
	use SortableTrait;
	use SortableOptionsTrait;
	
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Modules\Portfolios\PortfolioImage::class;
	
	public static $group = 'Portfolio';
	
	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'image_alt';
	
	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'image_alt',
	];
	
	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request)
	{
		$portfolio_id = request('viaResourceId');
		if (blank($portfolio_id)) {
			$portfolio_id = $this->portfolio_id;
		}
		
		return [
			ID::make()->sortable(),
			FilemanagerField::make('Image')
				->folder('/portfolios/' . $portfolio_id . '/images')
				->displayAsImage()->rules('required'),
			Text::make('Image Alt')->rules(['required']),
			Text::make('Title')->rules(['required']),
			Text::make('Subtitle')->rules(['required']),
            BelongsTo::make('Type', 'type', PortfolioImage::class)->rules('required'),
			BelongsTo::make('Portfolio', 'portfolio', Portfolio::class)->rules(['required'])
				->updateRules('sometimes')
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
