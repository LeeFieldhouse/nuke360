<?php

namespace App\Traits;

trait SortableModelTrait
{
	public static function orderColumnName(): string
	{
		return 'sort_order';
	}
}

