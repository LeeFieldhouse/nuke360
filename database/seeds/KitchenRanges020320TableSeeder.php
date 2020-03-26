<?php

use Illuminate\Database\Seeder;

class KitchenRanges020320TableSeeder extends Seeder
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
					'name'                => 'Otto',
					'slug' => 'malmo',
					'featured_image'      => '/kitchen_ranges/5/Burbidge_Images/1254.jpg',
					'featured_image_alt'  => 'Otto kitchen range image',
					'kitchen_style_id'    => 2,
					'kitchen_supplier_id' => 1,
					'images'              => [
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1254.jpg',
							'image_alt'        => 'Otto Light Grey Matt / Old Navy Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Light Grey Matt / Old Navy Matt'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1360.jpg',
							'image_alt'        => 'Otto Mink Matt / Concrete',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Mink Matt / Concrete'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1383.jpg',
							'image_alt'        => 'Otto Light Grey Matt / Concrete',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Light Grey Matt / Concrete'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1389.jpg',
							'image_alt'        => 'Otto Light Grey Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1404.jpg',
							'image_alt'        => 'Otto Bleached Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Bleached Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1405.jpg',
							'image_alt'        => 'Otto Light Grey Matt / Rose Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Light Grey Matt / Rose Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1410.jpg',
							'image_alt'        => 'Otto Light Gray Matt / Rose Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Light Gray Matt / Rose Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1413.jpg',
							'image_alt'        => 'Otto Light Gray Matt / Rose Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Light Gray Matt / Rose Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1417.jpg',
							'image_alt'        => 'Otto White Matt / Bleached Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto White Matt / Bleached Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1421.jpg',
							'image_alt'        => 'Otto White Matt / Bleached Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto White Matt / Bleached Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1423.jpg',
							'image_alt'        => 'Otto Bleached Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Bleached Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1427.jpg',
							'image_alt'        => 'Otto White Gloss / Bleached Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto White Gloss / Bleached Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1429.jpg',
							'image_alt'        => 'Otto White Gloss / Bleached Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto White Gloss / Bleached Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1434.jpg',
							'image_alt'        => 'Otto White Gloss / Bleached Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto White Gloss / Bleached Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1443.jpg',
							'image_alt'        => 'Otto White Gloss / Bleached Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto White Gloss / Bleached Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1467.jpg',
							'image_alt'        => 'Otto Mink Matt / Concrete / Dark Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Mink Matt / Concrete / Dark Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1469.jpg',
							'image_alt'        => 'Otto Mink Matt / Concrete / Dark Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Mink Matt / Concrete / Dark Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1470.jpg',
							'image_alt'        => 'Otto Mink Matt / Concrete / Dark Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Mink Matt / Concrete / Dark Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1472.jpg',
							'image_alt'        => 'Otto Mink Matt / Dark Walnut / Bespoke Colour Painted',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Mink Matt / Dark Walnut / Bespoke Colour Painted'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1475.jpg',
							'image_alt'        => 'Otto Concrete / Bespoke Colour Painted',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Concrete / Bespoke Colour Painted'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1477.jpg',
							'image_alt'        => 'Otto Mink Matt / Concrete / Dark Walnut',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Mink Matt / Concrete / Dark Walnut'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1478.jpg',
							'image_alt'        => 'Otto Mint Matt / Dark Walnut / Bespoke Colour Painted',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Mint Matt / Dark Walnut / Bespoke Colour Painted'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1610.jpg',
							'image_alt'        => 'Otto Light Grey Matt',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Light Grey Matt'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1827.jpg',
							'image_alt'        => 'Otto Black Marble',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Black Marble'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1830.jpg',
							'image_alt'        => 'Otto Anthracite Matt / Black Marble',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Anthracite Matt / Black Marble'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1832.jpg',
							'image_alt'        => 'Otto Anthracite Matt / Burshed Bronze',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Anthracite Matt / Burshed Bronze'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1836.jpg',
							'image_alt'        => 'Otto Dark Walnut Brushed Bronze',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Dark Walnut Brushed Bronze'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1837.jpg',
							'image_alt'        => 'Otto Anthracite Matt / Brushed Bronze',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Anthracite Matt / Brushed Bronze'
						],
						[
							'image'            => '/kitchen_ranges/5/Burbidge_Images/1840.jpg',
							'image_alt'        => 'Otto Dark Walnut / Oxide',
							'kitchen_style_id' => 2,
							'title'            => 'Otto Dark Walnut / Oxide'
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
