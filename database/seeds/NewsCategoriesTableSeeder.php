<?php

use Illuminate\Database\Seeder;

class NewsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
        	'Kitchen Design',
        	'Bedroom Design',
        	'nuke360'
		]);
        
        foreach($categories as $cat){
        	\App\Modules\News\NewsCategory::create([
        		'name' => $cat
			]);
		}
    }
}
