<?php

use Illuminate\Database\Seeder;

class TeamMemberSocialLinksTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$links = collect(
			[
				['name'  => 'Facebook',
				 'url'   => 'https://en-gb.facebook.com/CadburyKitchens/',
				 'class' => 'fa fa-facebook'
				],
				['name'  => 'Twitter',
				 'url'   => 'https://en-gb.facebook.com/CadburyKitchens/',
				 'class' => 'fa fa-twitter'
				],
				['name'  => 'Instagram',
				 'url'   => 'https://en-gb.facebook.com/CadburyKitchens/',
				 'class' => 'fa fa-instagram'
				],
			]
		);
		
		(new \App\Modules\Teams\TeamMember())->each(
			function ($member) use ($links) {
				$links->each(
					function ($link, $index) use ($member) {
						$link['order'] = $index;
						$member->socialLinks()->create($link);
					}
				);
			}
		);
	}
}
