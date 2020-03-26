<?php

use Illuminate\Database\Seeder;

class KitchenRangesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$ranges = collect(
			[
				[
					'name'                => 'Erin',
					'slug' => 'erin',
					'featured_image'      => '/kitchen_ranges/1/chartwell_featured_image/91.jpg',
					'featured_image_alt'  => 'Erin Natural Character Oak',
					'kitchen_style_id'    => 1,
					'kitchen_supplier_id' => 1,
					'images'              => [
						[
							'image'            => '/kitchen_ranges/1/chartwell_featured_image/91.jpg',
							'image_alt'        => 'Erin Natural Character Oak',
							'kitchen_style_id' => 1,
							'title'            => 'Erin Natural Character Oak'
						],
						[
							'image'            => '/kitchen_ranges/1/chartwell_featured_image/93.jpg',
							'image_alt'        => 'Erin Natural Character Oak',
							'kitchen_style_id' => 1,
							'title'            => 'Erin Natural Character Oak'
						],
						[
							'image'            => '/kitchen_ranges/1/chartwell_featured_image/161.jpg',
							'image_alt'        => 'Erin Natural Character Oak / Gooseberry Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Erin Natural Character Oak / Gooseberry Painted'
						],
						[
							'image'            => '/kitchen_ranges/1/chartwell_featured_image/174.jpg',
							'image_alt'        => 'Erin Natural Character Oak / Gooseberry Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Erin Natural Character Oak / Gooseberry Painted'
						],
						[
							'image'            => '/kitchen_ranges/1/chartwell_featured_image/663.jpg',
							'image_alt'        => 'Erin Natural Character Oak',
							'kitchen_style_id' => 1,
							'title'            => 'Erin Natural Character Oak'
						],
					]
				],
				[
					'name'                => 'Gresham',
					'slug' => 'gresham',
					'featured_image'      => '/kitchen_ranges/2/Burbidge_Images/1759.jpg',
					'featured_image_alt'  => 'gresham kitchen range image',
					'kitchen_style_id'    => 1,
					'kitchen_supplier_id' => 1,
					'images'              => [
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/1759.jpg',
							'image_alt'        => 'Gresham Pale Smoke Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Pale Smoke Painted'
						],
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/2048.jpg',
							'image_alt'        => 'Gresham Pewter Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Pewter Painted'
						],
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/2049.jpg',
							'image_alt'        => 'Gresham Pewter Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Pewter Painted'
						],
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/2050.jpg',
							'image_alt'        => 'Gresham Pewter Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Pewter Painted'
						],
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/2051.jpg',
							'image_alt'        => 'Gresham Pewter Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Pewter Painted'
						],
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/2052.jpg',
							'image_alt'        => 'Gresham Pewter Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Pewter Painted'
						],
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/2053.jpg',
							'image_alt'        => 'Gresham Cashmere Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Cashmere Painted'
						],
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/2054.jpg',
							'image_alt'        => 'Gresham Cashmere / Mink Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Cashmere / Mink Painted'
						],
						[
							'image'            => '/kitchen_ranges/2/Burbidge_Images/2055.jpg',
							'image_alt'        => 'Gresham Cashmere / Putty Painted',
							'kitchen_style_id' => 1,
							'title'            => 'Gresham Cashmere / Putty Painted'
						],
					]
				],
				[
					'name'                => 'Stowe',
					'slug' => 'stowe',
					'featured_image'      => '/kitchen_ranges/3/Burbidge_Images/598.jpg',
					'featured_image_alt'  => 'stowe kitchen range image',
					'kitchen_style_id'    => 1,
					'kitchen_supplier_id' => 1,
					'images'              => [
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/598.jpg',
							'image_alt'        => 'Stowe Light Grey Matt',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/599.jpg',
							'image_alt'        => 'Stowe Light Grey Matt',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/606.jpg',
							'image_alt'        => 'Stowe Light Grey Matt',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/607.jpg',
							'image_alt'        => 'Stowe Porcelain Matt',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Porcelain Matt'
						],
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/610.jpg',
							'image_alt'        => 'Stowe Porcelain Matt',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Porcelain Matt'
						],
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/618.jpg',
							'image_alt'        => 'Stowe Porcelain Matt',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Porcelain Matt'
						],
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/1004.jpg',
							'image_alt'        => 'Stowe Porcelain Matt / Cornflower Blue',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Porcelain Matt / Cornflower Blue'
						],
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/1126.jpg',
							'image_alt'        => 'Stowe Porcelain Matt - Handle Stainless Steel Effect',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Porcelain Matt - Handle Stainless Steel Effect'
						],
						[
							'image'            => '/kitchen_ranges/3/Burbidge_Images/1131.jpg',
							'image_alt'        => 'Stowe Soft Moss Painted - Handle Stainless Steel Effect',
							'kitchen_style_id' => 1,
							'title'            => 'Stowe Soft Moss Painted - Handle Stainless Steel Effect'
						],
					]
				],
				[
					'name'                => 'Malmö',
					'slug' => 'malmo',
					'featured_image'      => '/kitchen_ranges/4/Burbidge_Images/20.jpg',
					'featured_image_alt'  => 'chartwell kitchen range image',
					'kitchen_style_id'    => 2,
					'kitchen_supplier_id' => 1,
					'images'              => [
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/20.jpg',
							'image_alt'        => 'Malmö Porcelain Gloss / Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Porcelain Gloss / Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/23.jpg',
							'image_alt'        => 'Malmö Cashmere Gloss / Natural Oak',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Cashmere Gloss / Natural Oak'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/25.jpg',
							'image_alt'        => 'Malmö Cashmere Gloss',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Cashmere Gloss'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/26.jpg',
							'image_alt'        => 'Malmö White Gloss',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö White Gloss'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/465.jpg',
							'image_alt'        => 'Malmö White Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö White Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/481.jpg',
							'image_alt'        => 'Malmö White Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö White Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/602.jpg',
							'image_alt'        => 'Malmö Light Grey Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/605.jpg',
							'image_alt'        => 'Malmö Light Grey Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/619.jpg',
							'image_alt'        => 'Malmö Light Grey Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/625.jpg',
							'image_alt'        => 'Malmö Light Grey Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/640.jpg',
							'image_alt'        => 'Malmö Light Grey Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/902.jpg',
							'image_alt'        => 'Malmö White Gloss',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö White Gloss'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/903.jpg',
							'image_alt'        => 'Malmö White Gloss',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö White Gloss'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1250.jpg',
							'image_alt'        => 'Malmö Light Grey Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1657.jpg',
							'image_alt'        => 'Malmö Bespoke Colour Matt / Lead Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Bespoke Colour Matt / Lead Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1660.jpg',
							'image_alt'        => 'Malmö Gooseberry Matt / Lead Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Gooseberry Matt / Lead Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1748.jpg',
							'image_alt'        => 'Malmö Porcelain Gloss / Anthracide Gloss',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Porcelain Gloss / Anthracide Gloss'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1749.jpg',
							'image_alt'        => 'Malmö Anthracite Gloss',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Anthracite Gloss'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1750.jpg',
							'image_alt'        => 'Malmö Anthracite Gloss',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Anthracite Gloss'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1784.jpg',
							'image_alt'        => 'Malmö Anthracite Matt / Natural Oak',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Anthracite Matt / Natural Oak'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1787.jpg',
							'image_alt'        => 'Malmö Anthracite Gloss / Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Anthracite Gloss / Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1792.jpg',
							'image_alt'        => 'Malmö Anthracite Gloss / Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Anthracite Gloss / Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1793.jpg',
							'image_alt'        => 'Malmö Anthracite Gloss / Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Anthracite Gloss / Matt'
						],
						[
							'image'            => '/kitchen_ranges/4/Burbidge_Images/1842.jpg',
							'image_alt'        => 'Malmö Anthracite Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Malmö Anthracite Matt'
						],
					]
				],
			
			]
		);
		
		foreach ($ranges as $range) {
			$images = NULL;
			if (\Illuminate\Support\Arr::has($range, 'images')) {
				$images = $range['images'];
			}
			\Illuminate\Support\Arr::forget($range, 'images');
			$saved_range = \App\Modules\Kitchens\KitchenRange::create($range);
			if ($images) {
				foreach ($images as $image) {
					\Illuminate\Support\Facades\Session::flash('range', $saved_range->id);
					$saved_range->images()->create($image);
				}
			}
		}
	}
}
