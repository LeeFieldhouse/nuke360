<?php

use Illuminate\Database\Seeder;

class NewsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
        for($i=0;$i<10;$i++){
        	\App\Modules\News\NewsTag::create([
        		'name' => $faker->word
			]);
		}
    }
}
