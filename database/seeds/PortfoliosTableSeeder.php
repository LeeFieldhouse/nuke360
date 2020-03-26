<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker)
	{
		$imgs = collect([
			'test/bedroom.jpg',
			'test/kitchen.jpg',
			'test/kitchen2.jpg'
		]);
		for ($i = 0; $i < 3; $i++) {
			$title = $faker->sentence;
			$type = \App\Modules\Portfolios\PortfolioType::inRandomOrder()->first();
			\App\Modules\Portfolios\Portfolio::create(
				[
					'meta_title'         => $title,
					'meta_description'   => $faker->paragraph,
					'title'              => $title,
					'slug'               => \Illuminate\Support\Str::slug($title),
					'subtitle'           => $faker->sentence,
					'summary'            => $faker->paragraph,
					'case_study'         => $faker->paragraph,
					'result'             => $faker->paragraph,
					'experience'         => $faker->paragraph,
					'customer'           => $faker->firstName,
					'featured_image' => $imgs->random(),
					'completed_date'     => now()->subDay(mt_rand(1, 1000))->toDate(),
					'portfolio_type_id'            => $type->id,
					'kitchen_range_id'           => NULL,
					'bedroom_range_id'           => NULL
				]
			);
		}
	}
}
