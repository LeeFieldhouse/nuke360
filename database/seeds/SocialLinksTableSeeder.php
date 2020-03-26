<?php

use Illuminate\Database\Seeder;

class SocialLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$socials = collect([
    		['name' => 'Facebook', 'url' => 'https://en-gb.facebook.com/CadburyKitchens/', 'class' => 'fa fa-facebook'],
    		['name' => 'Houzz', 'url' => 'https://www.houzz.com/professionals/kitchen-designers-and-remodelers/cadbury-kitchens-ltd-pfvwus-pf~1578688604', 'class' => 'fa fa-houzz'],
    		['name' => 'Instagram', 'url' => 'https://en-gb.facebook.com/CadburyKitchens/', 'class' => 'fa fa-instagram'],
    		['name' => 'Pinterest', 'url' => 'https://en-gb.facebook.com/CadburyKitchens/', 'class' => 'fa fa-pinterest'],
		]);
    	foreach($socials as $index => $social) {
			\App\SocialLink::create(
				[
					'name' => $social['name'],
					'class' => $social['class'],
					'url' => $social['url']
		]
			);
		}
    }
}
