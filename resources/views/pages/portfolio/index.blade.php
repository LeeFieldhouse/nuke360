@extends('layouts.app')
@section('meta_title', $area->meta_title)
@section('meta_description', $area->meta_description)
@section('meta_tags')
	<meta property="og:title" content="{{$area->meta_title}} | nuke360">
	<meta property="og:description" content="{{$area->meta_description}}">
	<meta property="og:image" content="{{\Illuminate\Support\Facades\Request::root()}}/storage/portfolios/images/images/thumbnails/thumb_1.jpg">
	<meta property="og:url" content="{{\Illuminate\Support\Facades\URL::current()}}">
@endsection
@section('content')
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=190951205323680&autoLogAppEvents=1"></script>
	<!-- Head Section -->
	
	@include('pages._includes.banners.area.index')
	
	<section class="mt-40 ">
		<div class="container relative">
		
		{{--			<h2 class="section-title font-alt mb-70 mb-sm-40">--}}
		{{--				nuke360 Portfolio--}}
		{{--			</h2>--}}
		
		<!-- Row -->
			<div class="row">
				
				<!-- Col -->
				
				<div class="col-sm-6 mb-40">
					
					<!-- Paragraph -->
					<div class="text" style="height: 100%!important;">
						
						<h5 class="uppercase mb-30">nuke360 - Bedroom & Kitchen Portfolio</h5>
						
						<p>
							We are currently in the process of upgrading our website, our latest projects may not be shown here yet.
						</p>
						<p>
							To view our latest projects & news visit us on your favourite social platforms below.
						</p>
						<p class="footer-social-links">
							@foreach($social_links as $link)
								<a href="{{$link->link}}" title="{{$link->name}}"><i class="{{$link->class}}"></i></a>
								@endforeach
						</p>
						
						<a target="_blank" class="btn btn-mod btn-border btn-small btn-round fb-xfbml-parse-ignore" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F{{env('URL_AFTER')}}%2Fportfolio&amp;"><i class="fa fa-facebook"></i> Share on facebook</a>
					</div>
					<!-- End Paragraph -->
				
				</div>
				
				<!-- End Col -->
				
				<!-- Col -->
				
				<div class="col-sm-6 mb-40">
					
					<!-- Paragraph -->
					<div class="text">
						
						<h5 class="uppercase mb-30">No Obligation Design Consultation</h5>
						
						<p>
							All our projects below started with a free design consultation.
						</p>
						<p>
							Whether you know exactly what you are looking for, or you are looking for a new bedroom/kitchen with a blank canvas. We will work with you to build your vision.
						</p>
						<p class="footer-social-links">
							<a href="tel:01934876200"><i class="fa fa-phone"></i></a>
							<a href="mailto:sales@nuke360.com"><i class="fa fa-envelope"></i> </a>
						</p>
						
						<a href="{{route('pages.contact.index')}}" class="btn btn-mod btn-border btn-small btn-round"><i class="fa fa-calendar"></i>Book Free Design Consultation</a>
					
					</div>
					<!-- End Paragraph -->
				
				</div>
				
				<!-- End Col -->
			
			
			</div>
			<!-- End Row -->
		
		</div>
	</section>
	<!-- End Head Section -->
	
	<!-- Portfolio Section -->
	<section class="mt-40">
		<div class="container relative">
			<!-- Works Filter -->
		{{--			<div class="works-filter font-alt align-center">--}}
		{{--				<a href="#" class="filter active" data-filter="*">All works</a>--}}
		{{--				<a href="#branding" class="filter" data-filter=".branding">Branding</a>--}}
		{{--				<a href="#design" class="filter" data-filter=".design">Design</a>--}}
		{{--				<a href="#photography" class="filter" data-filter=".photography">Photography</a>--}}
		{{--			</div>--}}
		<!-- End Works Filter -->
			
			<!-- Works Grid -->
			<ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white" id="work-grid">
			@foreach($images as $index => $image)
				<!-- Work Item (Lightbox) -->
					@if($index < 9)
						<li class="work-item mix photography" style="position: absolute; left: 0px; top: 0px;">
							<a href="{{$image->image}}" class="work-lightbox-link mfp-image">
								<div class="work-img">
									<img src="{{$image->image_thumb}}" alt="{{$image->image_alt}}">
								</div>
								{{--							<div class="work-intro">--}}
								{{--								<h3 class="work-title">{{$image->title}}</h3>--}}
								{{--								<div class="work-descr">--}}
								{{--									@if(!$image->portfolio)--}}
								{{--									{{$image->subtitle}}--}}
								{{--										@else--}}
								{{--										<a href="{{route('pages.portfolio.show', [$image->type->slug, $image->portfolio->id, $image->portfolio->slug])}}">View this project ></a>--}}
								{{--									@endif--}}
								{{--								</div>--}}
								{{--							</div>--}}
							</a>
						</li>
						<!-- Work Item (External Page) -->
						@else
						<li>
							<a href="{{$image->image}}" class="work-lightbox-link mfp-image">
								<div class="work-img">
									<img src="">
								</div>
								{{--							<div class="work-intro">--}}
								{{--								<h3 class="work-title">{{$image->title}}</h3>--}}
								{{--								<div class="work-descr">--}}
								{{--									@if(!$image->portfolio)--}}
								{{--									{{$image->subtitle}}--}}
								{{--										@else--}}
								{{--										<a href="{{route('pages.portfolio.show', [$image->type->slug, $image->portfolio->id, $image->portfolio->slug])}}">View this project ></a>--}}
								{{--									@endif--}}
								{{--								</div>--}}
								{{--							</div>--}}
							</a>
						</li>
					@endif
					{{--					@if($image->portfolio)--}}
					{{--					<li class="work-item mix branding design">--}}
					{{--						<a href="{{route('pages.portfolio.show', [$image->type->slug, $image->portfolio->id, $image->portfolio->slug])}}" class="work-ext-link">--}}
					{{--							<div class="work-img">--}}
					{{--								<img class="work-img img-lazy-work" src="{{$image->image_thumb}}" data-original="{{$image->image_thumb}}" width="650" height="418" alt="{{$image->image_alt}}" />--}}
					{{--							</div>--}}
					{{--							<div class="work-intro">--}}
					{{--								<h3 class="work-title">{{$image->title}}</h3>--}}
					{{--								<div class="work-descr">--}}
					{{--									Click to view project--}}
					{{--								</div>--}}
					{{--							</div>--}}
					{{--						</a>--}}
					{{--					</li>--}}
					{{--					<!-- End Work Item -->--}}
					{{--					@endif--}}
				@endforeach
			</ul>
			<!-- End Works Grid -->
		</div>
		<div class="row justify-content-center text-center">
			{{$blank_images->appends($_GET)->links()}}
		</div>
	</section>
	<!-- End Portfolio Section -->
	
	<!-- Call Action Section -->
	<section class="small-section bg-dark mt-40">
		<div class="container relative">
			<div class="align-center">
				<h3 class="banner-heading font-alt">Like Our Work?</h3>
				<div>
					<a href="{{route('pages.contact.index')}}" class="btn btn-mod btn-w btn-medium btn-round">Contact Us Today For A No Obligation Free Design Consultation</a>
				</div>
			</div>
		
		</div>
	</section>
	<!-- End Call Action Section -->

@endsection
