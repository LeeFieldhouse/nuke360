<?php

use Illuminate\Database\Seeder;

class NewsPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
    	$content = ' <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non laoreet dui. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa.
                                    </p>
    								
    								<p>
                                        Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem.
                                        Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa.
                                        Fusce non ante sed lorem rutrum feugiat.
                                    </p>
    								
    								<blockquote>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a&nbsp;ante.
                                        </p>
                                        <footer>
                                            Someone famous in
                                            <cite title="Source Title">
                                                Source Title
                                            </cite>
                                        </footer>
                                    </blockquote>
    								
                                    <p>
                                        Praesent ultricies ut ipsum non laoreet. Nunc ac <a href="#">ultricies</a> leo. Nulla ac ultrices arcu. Nullam adipiscing lacus in consectetur posuere. Nunc malesuada tellus turpis, ac pretium orci molestie vel.
                                        Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa.
                                        Fusce non ante sed lorem rutrum feugiat.
                                    </p>
                                    
                                    <ul>
                                        <li>First item of the list</li>
                                        <li>Second item of the list</li>
                                        <li>Third item of the list</li>
                                    </ul>
                                    
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non laoreet dui. Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id sapien tempor molestie in nec massa.
                                        Fusce non ante sed lorem rutrum feugiat. Vestibulum pellentesque, purus ut&nbsp;dignissim consectetur, nulla erat ultrices purus, ut&nbsp;consequat sem elit non sem.
                                    </p>
                                    
                                    
    							</div>';
        	$images = collect([
        		'test/bedroom.jpg',
				'test/kitchen.jpg',
				'test/kitchen2.jpg'
			]);
        for($i = 0; $i < 10; $i++){
        	$title = $faker->sentence;
        	\App\Modules\News\NewsPost::create([
        		'meta_title' => $title,
        		'meta_description' => $faker->paragraph,
				'title' => $title,
				'slug' => \Illuminate\Support\Str::slug($title),
				'author_id' => \App\Admin::inRandomOrder()->first()->id,
				'summary' => $faker->paragraph,
				'content' => $content,
				'published_at' => now()->subDay(mt_rand(1, 1000)),
				'featured_image' => 'portfolios/images/images/1-1.jpg',
				'featured_image_alt' => 'News Items',
			])->categories()->attach(\App\Modules\News\NewsCategory::inRandomOrder()->take(mt_rand(1, \App\Modules\News\NewsCategory::count()))->get());
		}
    }
}
