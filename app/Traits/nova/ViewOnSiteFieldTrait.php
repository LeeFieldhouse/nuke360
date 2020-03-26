<?php

namespace App\Traits\Nova;

use Laravel\Nova\Fields\Text;

trait ViewOnSiteFieldTrait
{
	
	public function viewOnSiteField()
	{
		return Text::make(
			'',
			function () {
				return '<a class="btn btn-default btn-primary" href="' . $this->getUrl() . '">View on site</a>';
			}
		)->asHtml();
		
	}
	
	
}
