<?php

use Illuminate\Database\Seeder;

class KitchenSuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = collect([
        	'name' => 'Burbidge'
		]);
    }
}
