<?php

use Illuminate\Database\Seeder;

class RangeImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for($i=0;$i<100;$i++){
			$portfolio = \App\Modules\Ranges\Range::inRandomOrder()->first();
			$type = $portfolio->type;
			$image = [
				'image' => $type->name == 'kitchens' ? 'test/kitchen.jpg' : 'test/bedroom.jpg',
				'image_alt' => $faker->word,
				'image_thumb' => $type->name == 'kitchens' ? 'test/kitchen.jpg' : 'test/bedroom.jpg',
				'is_featured' => mt_rand(0, 1),
				'portfolio_id' => $portfolio->id
			];
			$new_image->create($image);
		}
    }
}
