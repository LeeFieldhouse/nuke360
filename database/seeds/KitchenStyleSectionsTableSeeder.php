<?php

use Illuminate\Database\Seeder;

class KitchenStyleSectionsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @param \Faker\Generator $faker
	 * @return void
	 */
	public function run(\Faker\Generator $faker)
	{
		foreach (\App\Modules\Kitchens\KitchenStyle::all() as $style) {
			for ($i = 0; $i < 4; $i++) {
				$style->sections()->create(
					[
						'title'       => $faker->jobTitle,
						'content'     => $faker->paragraph,
						'button_text' => 'If blank I won\'t show'
					]
				);
			}
		}
	}
}
