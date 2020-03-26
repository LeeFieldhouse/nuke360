<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(\Faker\Generator $faker)
	{
		$routes = collect(
			[
				[
					'route_name'         => 'pages.welcome.index',
					'meta_title'         => 'Digital Agency In Bristol',
					'meta_description'   => 'Rottie Media is a digital agency in Bristol, UK. We specialise in generating new leads & sales via social media & also creating custom web applications that can be integrated with social media for a complete marketing strategy.',
					'banner_title'       => '',
					'banner_opacity'       => '50',
					'banner_subtitle' => '',
					'banner_image'       => '',
					'bread_crumb' => '<a href="">Home</a>&nbsp;/&nbsp;<a href="">Kitchen Styles</a>',
				],
                [
                    'route_name'         => 'pages.news.index',
                    'meta_title'         => 'Social Media Marketing Specialist News',
                    'meta_description'   => 'Rottie Media is a digital agency in Bristol, UK. We specialise in generating new leads & sales via social media & also creating custom web applications that can be integrated with social media for a complete marketing strategy.',
                    'banner_title'       => '',
                    'banner_opacity'       => '50',
                    'banner_subtitle' => '',
                    'banner_image'       => '',
                    'bread_crumb' => '<a href="">Home</a>&nbsp;/&nbsp;<a href="">Kitchen Styles</a>',
                ],
				
			]
		);
		
		$routes->each(
			function ($route) {
				(new \App\Modules\Areas\Area())->create($route);
			}
		);
	}
}
