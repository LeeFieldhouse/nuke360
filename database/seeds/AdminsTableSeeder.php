<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Admin::create(
			[
				'name'     => 'Lee',
				'email'    => 'leebtc1991@gmail.com',
				'password' => bcrypt(env('ME_PASSWORD'))
			]
		);
		
		\App\Admin::create(
			[
				'name'     => 'Michelle',
				'email'    => 'michelle_321@hotmail.co.uk ',
				'password' => bcrypt(env('SISTER_PASSWORD'))
			]
		);
		\App\Admin::create(
			[
				'name'     => 'Sue',
				'email'    => 'sue@cadburykitchens.co.uk',
				'password' => bcrypt(env('MUM_PASSWORD')),
			]
		);
		
	}
}
