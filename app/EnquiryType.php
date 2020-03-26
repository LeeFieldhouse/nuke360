<?php

namespace App\Traits\Nova;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\SortableTrait;

class EnquiryType extends Model
{
	use SoftDeletes;
	use SortableTrait;
	
	public $sortable = [
		'order_column_name' => 'sort_order',
		'sort_when_creating' => true,
	];
	
	protected $guarded = [];
}
