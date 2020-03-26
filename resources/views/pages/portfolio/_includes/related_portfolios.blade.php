<section class="page-section">
	<div class="container relative">
		
		<h2 class="section-title font-alt mb-70 mb-sm-40">
			Related Projects
		</h2>
		
		<!-- Works Grid -->
		<ul class="works-grid work-grid-gut clearfix font-alt hover-white" id="work-grid">
			
			<!-- Work Item (External Page) -->
			@foreach($portfolio->getRelatedPortfolios() as $related_portfolio)
				<li class="work-item">
					<a href="{{route('pages.portfolio.show', [$related_portfolio->type->name, $related_portfolio->id,  $related_portfolio->slug])}}" class="work-ext-link">
						<div class="work-img">
							<img class="work-img" src="{{$portfolio->featured_image_thumb}}" alt="{{$portfolio->featured_image_alt}}" />
						</div>
						<div class="work-intro">
							<h3 class="work-title">{{$related_portfolio->title}}</h3>
							<div class="work-descr">
								{{$related_portfolio->subtitle}}
							</div>
						</div>
					</a>
				</li>
		@endforeach
		<!-- End Work Item -->
		
		</ul>
		<!-- End Works Grid -->
	
	</div>
</section>
