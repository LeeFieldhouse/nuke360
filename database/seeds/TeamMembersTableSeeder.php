<?php

use Illuminate\Database\Seeder;

class TeamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
        	['name' => 'Sue Fieldhouse', 'position' => 'Director', 'content' => 'Sue has been designing kitchens and bedrooms for over 20 years and loves nothing more than to create that dream design for her customers. “The passion never leaves me – each kitchen is a challenge and a pleasure each unique in its own way”. Sue loves nothing more than spending time in her kitchen cooking and enjoying the company of her family and friends around for a relaxing fun time. Otherwise its out walking locally or in Devon where she spends a lot of her free time walking her beloved dog Bentley.', 'image' => 'team/team_members/sue.jpg', 'image_alt' => 'Sue Fieldhouse - Director'],
        	['name' => 'Sophie Musson', 'position' => 'Designer', 'content' => 'Sophie started working for Cadbury Kitchens in 2014. She loves designing kitchens and making the most of a space to suit the client’s needs and lifestyle. Sophie is studying Kitchen Design at Bucks New Uni and is looking forward to putting this knowledge to use; making innovative and functional spaces. When Sophie isn’t working she spends her time going to gym – having now found Crossfit, which is definitely the hardest part of her day!', 'image' => 'team/team_members/sophie.jpg', 'image_alt' => 'Sophie Musson - Designer'],
        	['name' => 'Teresa Miles', 'position' => 'Designer', 'content' => 'Teresa has been working at Cadbury since the doors opened in 1994. She has fantastic knowledge of the business having started off designing and now working part time carrying out the administration side together with helping customers in the showroom . She spends her spare time keeping fit and visiting her daughters in London – that is between the regular cruises that her and her husband now enjoy!', 'image' => 'team/team_members/Teresa.jpg', 'image_alt' => 'Teresa Miles - Designer'],
		];
        
        foreach ($members as $member){
        	\App\Modules\Teams\TeamMember::create($member);
		}
    }
}
