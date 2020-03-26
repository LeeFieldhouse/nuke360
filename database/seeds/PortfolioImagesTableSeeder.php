<?php

use Illuminate\Database\Seeder;

class PortfolioImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker, \App\Modules\Portfolios\PortfolioImage $new_image)
    {
    
//    	$image_count = \Illuminate\Support\Facades\Storage::size('portfolios/images');
    	$portfolio_images = \Illuminate\Support\Facades\Storage::disk('public')->files('portfolios/images');
    	foreach($portfolio_images as $image){
    		$portfolio = \App\Modules\Portfolios\Portfolio::inRandomOrder()->first();
    		$type = $portfolio->type;
    		$image = [
    			'image' => $image,
				'image_alt' => $faker->word,
				'title' => 'Title',
				'subtitle' => 'I am the subtitle',
				'portfolio_id' => NULL,
				'portfolio_type_id' => 1
			];
    		$new_image->create($image);
		}
    }
}
