<?php

use Illuminate\Database\Seeder;

class NewsPostNewsTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(\App\Modules\News\NewsPost::all() as $post){
        	$post->tags()->attach(\App\Modules\News\NewsTag::inRandomOrder()->take(mt_rand(1, 5))->get('id'));
		}
    }
}
