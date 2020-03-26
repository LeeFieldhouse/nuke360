<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
        for($i=0;$i<50;$i++){
        	\App\Comment::create([
        		'commentable_id' => \App\Modules\News\NewsPost::inRandomOrder()->first()->id,
				'commentable_type' => 'App\Modules\News\NewsPost',
				'author_id' => \App\User::inRandomOrder()->first()->id,
				'parent_id' => mt_rand(1, 17) == 5 ? \App\Comment::inRandomorder()->first()->id : NULL,
				'content' => $faker->paragraph
			]);
		}
    }
}
