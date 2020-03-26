<?php

namespace App\Nova\Modules\News;

use App\Nova\Admin;
use App\Nova\Resource;
use App\Traits\Nova\ViewOnSiteFieldTrait;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Infinety\Filemanager\FilemanagerField;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class NewsPost extends Resource
{
	use ViewOnSiteFieldTrait;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Modules\News\NewsPost::class;
    public static $group = 'News';
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
            ID::make()->sortable(),
			Text::make('Meta Title')
				->hideFromIndex()
			->help('SEO purposes'),
			Textarea::make('Meta Description')->help('SEO purposes'),
			FilemanagerField::make('Featured Image')->displayAsImage()
			->hideFromIndex(),
			TextWithSlug::make('Title')->slug('slug'),
			Slug::make('Slug'),
			Text::make('Summary')
				->rules('max:140')
				->hideFromIndex(),
			NovaTinyMCE::make('Content', 'content')->options(config('tiny_mce_options')),
			DateTime::make('Publish At', 'published_at'),
			BelongsTo::make('Author', 'author', Admin::class)->help('This is the author, will use name'),
			BelongsToMany::make('News Categories', 'categories', NewsCategory::class),
			$this->viewOnSiteField()
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
