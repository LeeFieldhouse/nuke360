<?php

return [
	'plugins' => [
		'lists advlist autolink  link image charmap print preview hr anchor pagebreak',
		'searchreplace wordcount visualblocks visualchars code fullscreen',
		'insertdatetime media nonbreaking save table contextmenu directionality',
		'emoticons template paste textcolor colorpicker textpattern'
	],
	'toolbar' => 'numlist bullist |undo redo | styleselect | bold italic | alignleft aligncenter alignright | blockquote link image | source',
	'use_lfm' => true,
	'lfm_url' => 'laravel-filemanager',
	
	'height' => '400',
	'width' => '825',
	'space' => '730',
	'menubar' => true,
	'branding' => false,
	'statusbar' => true,
	'image_dimensions' => false,
	'object_resizing' => false,
	"nonbreaking_force_tab" => true,
	'content_css' => ['/css/bootstrap.min.css',
					  '/css/style.css',
					  '/css/style-responsive.css',
					  '/css/animate.min.css',
					  '/css/vertical-rhythm.min.css',
					  '/css/owl.carousel.css',
					  '/css/magnific-popup.css'
	],
	'style_formats_merge' => false,
	'style_formats' => [
		["title" => "h1", "block" => "h1", ],
		["title" => "h2", "block" => "h2"],
		["title" => "h3", "block" => "h3"],
		["title" => "h4", "block" => "h4"],
		["title" => "h5", "block" => "h5"],
		["title" => "Button Blue", "block" => "button", "classes" => ["btn", "btn-primary"]],
		["title" => "Button Green", "block" => "button", "classes" => ["btn", "bg-brand-green"]],
		["title" => "Small Button Blue", "block" => "button", "classes" => ["btn", "btn-sm", "bg-brand-blue"]],
		["title" => "Small Button Green", "block" => "button", "classes" => ["btn", "btn-sm", "bg-brand-green"]],
		["title" => "Blockquote", "block" => "blockquote"],
		["title" => "Remove shadow", "inline" => "span", 'classes' => 'no-shadow'],
	],
];
