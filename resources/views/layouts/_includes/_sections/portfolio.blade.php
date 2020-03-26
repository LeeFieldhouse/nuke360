<section class="pb-0" id="portfolio">
	<div class="text-center">
		<div class="font-alt mb-20">
			<a href="{{route('pages.portfolio.index')}}"> View full portfolio >></a>
		</div>
	</div>
	<div class="relative">
{{--		--}}
{{--		<h2 class="section-title font-alt mb-70 mb-sm-40">--}}
{{--			Portfolio--}}
{{--		</h2>--}}
{{--		--}}
{{--		<div class="container">--}}
{{--			<div class="row">--}}
{{--				<div class="col-md-8 col-md-offset-2">--}}
{{--					--}}
{{--					<div class="section-text align-center mb-70 mb-xs-40">--}}
{{--						In&nbsp;auctor ex&nbsp;id&nbsp;urna faucibus porttitor. Lorem ipsum dolor sit amet,--}}
{{--						consectetur adipiscing elit. In&nbsp;maximus ligula semper metus pellentesque mattis.--}}
{{--						Maecenas volutpat, diam enim sagittis quam, id&nbsp;porta quam. Sed id&nbsp;dolor--}}
{{--						consectetur fermentum nibh volutpat, accumsan purus.--}}
{{--					</div>--}}
{{--				--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--		--}}
{{--		<!-- Works Filter -->--}}
{{--		<div class="works-filter font-alt align-center">--}}
{{--			<a href="#" class="filter active" data-filter="*">All works</a>--}}
{{--			<a href="#branding" class="filter" data-filter=".branding">Branding</a>--}}
{{--			<a href="#design" class="filter" data-filter=".design">Design</a>--}}
{{--			<a href="#photography" class="filter" data-filter=".photography">Photography</a>--}}
{{--		</div>--}}
{{--		<!-- End Works Filter -->--}}
{{--		--}}
		<!-- Works Grid -->
		<ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
			@foreach($portfolio_images as $image)
				@if(true)
			<!-- Work Item (Lightbox) -->
			<li class="work-item mix photography">
				<a href="{{$image->image}}" class="work-lightbox-link mfp-image">
					<div class="work-img">
						<img src="{{$image->image}}" alt="Work" style="max-height: 333px;"/>
					</div>
{{--					<div class="work-intro">--}}
{{--						<h3 class="work-title">{{$image->title}}dfdsfdfdfd</h3>--}}
{{--						<div class="work-descr">--}}
{{--							dfsfssfdfd--}}
{{--							{{$image->subtitle}}--}}
{{--						</div>--}}
{{--					</div>--}}
				</a>
			</li>
			<!-- End Work Item -->
			@else
			<!-- Work Item (External Page) -->
{{--			<li class="work-item mix branding design" >--}}
{{--				<a href="{{route('pages.portfolio.show', [$image->type->name, $image->portfolio->id, $image->portfolio->slug])}}" class="work-ext-link">--}}
{{--					<div class="work-img">--}}
{{--						<img class="work-img" src="{{$image->image_thumb}}" alt="{{$image->image_alt}}" style="max-height: 412px;"/>--}}
{{--					</div>--}}
{{--					<div class="work-intro">--}}
{{--						<h3 class="work-title">{{$image->title}}</h3>--}}
{{--						<div class="work-descr">--}}
{{--							{{$image->subtitle}}--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</a>--}}
{{--			</li>--}}
			<!-- End Work Item -->
			@endif
			@endforeach
		
		</ul>
		<!-- End Works Grid -->
	
	</div>
</section>
