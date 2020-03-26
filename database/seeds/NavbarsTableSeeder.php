<?php

use Illuminate\Database\Seeder;

class NavbarsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$navbar_links = [
			['label' => 'Home', 'slug' => '/'],
			['label' => 'Portfolio', 'slug' => '/portfolio'],
			//			['label'' => 'Kitchens', 'slug' => '/portfolio/?type=', 'parent_id' => 3],
			//			['label'' => 'Bedrooms', 'slug' => '/portfolio/bedrooms', 'parent_id' => 3],
			['label' => 'Kitchen Styles', 'slug' => '/kitchens/kitchen-styles', 'parent_id' => 3],
			['label' => 'Bedroom Styles', 'slug' => '/bedrooms/bedroom-styles', 'parent_id' => 4],
			['label' => 'About', 'slug' => '/about-us'],
			['label' => 'News', 'slug' => '/news'],
			['label' => 'Contact', 'slug' => '/contact-us'],
		];
		foreach ($navbar_links as $index => $navbar_link) {
			\App\Navbar::create(
				[
					'label'      => $navbar_link['label'],
					'slug'       => $navbar_link['slug'],
					'parent_id'  => $navbar_link['parent_id'] ?? NULL,
					'sort_order' => $index
				]
			);
		};
	}
}
