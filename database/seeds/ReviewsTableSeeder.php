<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = collect([
        	[
        		'name' => 'Tracey Dawe',
				'content' => '<p>From start to finish Cadbury Kitchens were excellent, especially Sue who designed not only our kitchen but our whole extension !! Very professional but we had fun along the way, would recommend sue and her team with no hesitation, thank you very much we love it !! Tracey and Barry( Backwell )</p>',
				'class' => 'fa fa-facebook',
				'url' => 'https://www.facebook.com/pg/CadburyKitchens/reviews/'
			],
			[
				'name' => 'Michele Rose',
				'content' => '<p>Right from the first meeting, we felt comfortable with Sue. She listened and understood our requirements, and produced a kitchen design to match. We were never put under pressure to make a decision and Sue was always there to answer our numerous questions.</p>
<p>The team of contractors were all professional and meticulous in their work, and everything was completed within the timescale given.
Many thanks to Sue and her team -
we are so pleased with our new kitchen.</p>',
				'class' => 'fa fa-facebook',
				'url' => 'https://www.facebook.com/pg/CadburyKitchens/reviews/'
			],
			[
				'name' => 'Heather Hayward',
				'content' => '<p>Sue and the team were fantastic with designing and putting into place the wonderful designs for both kitchen and bedrooms in our new place in Exmouth. Absolutely fantastic and would highly recommend!</p>',
				'class' => 'fa fa-facebook',
				'url' => 'https://www.facebook.com/pg/CadburyKitchens/reviews/'
			],
			[
				'name' => 'Carole Finch',
				'content' => '<p>As soon as we met Sue, I knew that we were in safe hands. She guided us through the process and made everything so easy. We changed our minds numerous times throughout and nothing was too much trouble. All the workmen have worked with Sue for many years and they work well together. Smooth from start to finish. We thoroughly recommend Cadbury Kitchens.</p>',
				'class' => 'fa fa-facebook',
				'url' => 'https://www.facebook.com/pg/CadburyKitchens/reviews/'
			],
		]);
        
        foreach($reviews as $review){
        	\App\Modules\Reviews\Review::create($review);
		}
    }
}
