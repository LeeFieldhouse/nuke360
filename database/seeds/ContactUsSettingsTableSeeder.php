<?php

use Illuminate\Database\Seeder;

class ContactUsSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
    	$settings = new \App\Modules\Contact_Us\ContactUsSetting();
        $settings->contact_form_email = 'leebtc1991@gmail.com';
        $settings->email = 'info@cadburykitchens.co.uk';
		$settings->address = 'Unit 15, Market Industrial Estate, N End, Yatton, Bristol BS49 4RF';
		$settings->phone = '01934 876 321';
		$settings->content = $faker->randomHtml();
		$settings->google_map_iframe = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2489.595423103355!2d-2.828444184202595!3d51.3921133796164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871f6d23dffc733%3A0xc3d40e659c70ea0b!2sCadbury%20Kitchens%20Ltd!5e0!3m2!1sen!2suk!4v1576428625250!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';
		$settings->save();
    }
}
