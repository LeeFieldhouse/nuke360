<?php

namespace App\Http\Controllers;

use App\Modules\Portfolios\Portfolio;
use App\Modules\Portfolios\PortfolioImage;
use App\Modules\Portfolios\PortfolioType;
use App\Traits\ControllerAreaTrait;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
	use ControllerAreaTrait;
	
	public function index()
	{
		
		$portfolios = new Portfolio();
		
		if(filled($type = request('type'))){
			$portfolios = $portfolios->where('portfolio_type_id', $type);
		}
		
		
		$images = PortfolioImage::paginate(100);
		$blank_images = PortfolioImage::paginate(9);
 		return view('pages.portfolio.index', [
			'images' => $images,
			'blank_images' => $blank_images,
			'area' => $this->area
		]);
	}
	
	public function show(PortfolioType $type, Portfolio $portfolio_id, $portfolio_slug)
	{
		$portfolio = $portfolio_id;
		$portfolio_type = $portfolio->type;
		if($portfolio->slug !== $portfolio_slug || $portfolio_type->id !== $type->id){
			return redirect()->route('pages.portfolio.show', [$portfolio_type->slug, $portfolio->id, $portfolio->slug]);
		}
		
		return view('pages.portfolio.show', [
			'portfolio' => $portfolio,
			'portfolio_type' => $portfolio_type,
			'portfolio_images' => $portfolio->images
		]);
	}
}
