<?php

use Illuminate\Database\Seeder;

class BedroomSuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$suppliers = [
			['name' => 'Kindred']
		];
		
		foreach($suppliers as $s){
			\App\Modules\Bedrooms\BedroomSupplier::create($s);
		};
    }
}
