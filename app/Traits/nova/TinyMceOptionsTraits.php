<?php

namespace App\Traits\Nova;


trait TinyMceOptionsTrait
{
	public function tinyOptions()
	{
		return [
			'plugins' => [
				'advlist autolink lists link image charmap print preview hr anchor pagebreak',
				'searchreplace wordcount visualblocks visualchars code fullscreen',
				'insertdatetime media nonbreaking save table contextmenu directionality',
				'emoticons template paste textcolor colorpicker textpattern'
			],
			'toolbar' => 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
			'use_lfm' => TRUE,
			'height' => '400',
			'width' => '760',
			'space' => '765',
			'menubar' => true,
			'branding' => false,
			'statusbar' => true,
			'image_dimensions' => false,
			'object_resizing' => false,
			"nonbreaking_force_tab" => true,
			'content_css' => [
				'/css/styles.css'
			],
			'content_style' => [
				'body {padding: 0 20px;
				font-family: "Uniform Condensed Medium", "open sans", sans-serif}',
			],
			'style_formats_merge' => false,
			'style_formats' => [
				["title" => "h1", "block" => "h1", ],
				["title" => "h2", "block" => "h2"],
				["title" => "h3", "block" => "h3"],
				["title" => "h4", "block" => "h4"],
				["title" => "Button Blue", "selector" => "a", "classes" => ["btn", "btn-primary", "text-white"]],
				["title" => "Button Red", "selector" => "a", "classes" => ["btn", "btn--tertiary", "text-white", "type--uppercase"]],
				["title" => "Blockquote", "block" => "blockquote"],
			],
		];
	}
}
