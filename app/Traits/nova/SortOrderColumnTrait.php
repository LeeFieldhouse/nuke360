<?php

namespace Bct\Kore\Traits\Nova;

use Laravel\Nova\Fields\Number;

trait SortOrderColumnTrait
{
	public function sortOrderColumn()
	{
		return Number::make('Sort Order', 'sort_order')
			->hideFromIndex()->hideWhenUpdating()->hideFromDetail()->withMeta(
				$this->sort_order ? [] : ["value" => $this::latest('sort_order')->first('sort_order')->sort_order + 1]
			)->rules(['unique:'. $this->getTable(), 'required']);
	}
}
