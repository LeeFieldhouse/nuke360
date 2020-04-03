<?php

use Illuminate\Database\Seeder;

class KitchenStylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $styles = collect([
        	'Classic' => '/kitchen_ranges/1/images/originals/91.jpg',
        	'Contemporary' => '/kitchen_ranges/chartwell_featured_image.jpg',
		]);


        
        foreach($styles as $style => $image){
        	\App\Modules\Kitchens\KitchenStyle::create([
        		'meta_title' => $style . ' Kitchens',
				'meta_description' => $style. ' Kitchens at nuke360',
				'name' => $style,
				'slug' => \Illuminate\Support\Str::slug(strtolower($style)),
				'description' => 'This is the default description, change me in nova',
				'featured_image' => $image
			]);
		}
    }
}
