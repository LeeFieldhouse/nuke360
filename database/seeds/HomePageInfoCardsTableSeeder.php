<?php

use Illuminate\Database\Seeder;

class HomePageInfoCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = collect([
        	[
        		'title' => 'Portfolio',
				'content' => 'We have been designing bespoke kitchens from our showroom in Yatton since 1994. We are one of Bristol’s leading kitchen companies.',
				'button_text' => 'View Portfolio',
				'button_url' => '/portfolio',
				'image' => '/home_page_info_cards/portfolio_image.jpg',
				'image_alt' => 'Portfolio Image'
			],
			[
				'title' => 'Kitchen & Bedroom Design',
				'content' => 'We design and fit a wide range of bespoke bedrooms, whether you are looking for a classic feel or you have a more modern taste, we have something for you.',
				'button_text' => 'View Kitchen Styles',
				'button_url' => '/kitchen-styles',
				'image' => '/home_page_info_cards/design_image.jpg',
				'image_alt' => 'Kitchen Image'
			],
			[
				'title' => 'Free Design Consultation',
				'content' => 'We offer a no obligation, free design consultation. We don’t need pressure selling, you have no reason not use our services.',
				'button_text' => 'Book Free Design Consultation',
				'button_url' => '/contact',
				'image' => '/home_page_info_cards/consultation_image.jpg',
				'image_alt' => 'Kitchen Plan Image'
			],
			
		]);
        
        foreach($cards as $card){
        	\App\HomePageInfoCard::create($card);
		}
    }
}
