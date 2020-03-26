<?php

use Illuminate\Database\Seeder;

class PortfolioTypesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(\App\Modules\Portfolios\PortfolioType $type, \Faker\Generator $faker)
	{
		$types = [
			[
				'name'             => 'kitchens',
				'slug'             => 'kitchens',
				'meta_title'       => 'Kitchen Portfolio',
				'meta_description' => 'This is our kitchen portfolio.',
				'banner_image'     => $faker->imageUrl(),
				'banner_title'     => $faker->sentence,
				'banner_subtitle'  => $faker->sentence,
				'bread_crumb' => '<a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>About Us</span>'
			],
			[
				'name'             => 'bedrooms',
				'slug'             => 'bedrooms',
				'meta_title'       => 'Bedroom Portfolio',
				'meta_description' => 'This is our bedroom portfolio.',
				'banner_image'     => $faker->imageUrl(),
				'banner_title'     => $faker->sentence,
				'banner_subtitle'  => $faker->sentence,
				'bread_crumb' => '<a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>About Us</span>'
			]
		];
		
		foreach ($types as $ty) {
			$type->create(
				$ty
			);
		}
	}
}
