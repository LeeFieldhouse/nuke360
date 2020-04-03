<?php

namespace App\Http\Controllers;

use App\HomePageInfoCard;
use App\Modules\Portfolios\PortfolioImage;
use App\Modules\Reviews\Review;
use App\Modules\Teams\TeamMember;

use App\SocialLink;
use App\Traits\ControllerAreaTrait;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;

class PageController extends Controller
{
	use ControllerAreaTrait;
	
	public function index()
	{
		$images = PortfolioImage::inRandomorder()->take(3)->get();
		$info_cards = HomePageInfoCard::all();
		

		
		return view('pages.home.index', [
			'portfolio_images' => $images,
			'reviews' => (new Review())->inRandomOrder()->take(10)->get(),
			'info_cards' => $info_cards,
			'area' => $this->area
		]);
    }
	
	public function aboutIndex()
	{
	 
		return view('pages.about.index', [
			'team_members' => TeamMember::all(),
			'reviews' => (new Review())->getFeaturedReviews(5),
			'area' => $this->area
		]);
    }
    
}
