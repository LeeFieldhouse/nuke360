<?php

namespace App\Traits\Nova;

use Laravel\Nova\Http\Requests\NovaRequest;

trait SortableOptionsTrait
{
	/**
	 * Build an "index" query for the given resource.
	 *
	 * @param \Laravel\Nova\Http\Requests\NovaRequest $request
	 * @param \Illuminate\Database\Eloquent\Builder   $query
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function indexQuery(NovaRequest $request, $query)
	{
		$query->when(
			empty($request->get('orderBy')),
			function ($q) {
				$q->getQuery()->orders = [];
				
				return $q->orderBy(static::$model::orderColumnName());
			}
		);
		
		return $query;
	}
	
	/**
	 * Prepare the resource for JSON serialization.
	 *
	 * @param \Laravel\Nova\Http\Requests\NovaRequest $request
	 * @param \Illuminate\Support\Collection          $fields
	 *
	 * @return array
	 */
	public function serializeForIndex(NovaRequest $request, $fields = NULL)
	{
		return array_merge(
			parent::serializeForIndex($request, $fields),
			[
				'sortable' => TRUE
			]
		);
	}
	
}

