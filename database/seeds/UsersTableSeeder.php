<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(\Faker\Generator $faker)
	{
		\App\User::create([
			'avatar' => 'https://d13ezvd6yrslxm.cloudfront.net/wp/wp-content/images/avatar-neytiri-sad.jpg',
			'name' => 'Lee F',
			'email' => 'leebtc1991@gmail.com',
			'password' => bcrypt('password')
		]);
		for ($i = 0; $i < 10; $i++) {
			\App\User::create([
				'avatar' => 'https://d13ezvd6yrslxm.cloudfront.net/wp/wp-content/images/avatar-neytiri-sad.jpg',
				'name' => $faker->userName,
				'email' => $faker->freeEmail,
				'password' => bcrypt('password')
			]);
		}
	}
}
