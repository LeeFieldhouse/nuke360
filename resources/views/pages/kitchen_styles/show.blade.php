@extends('layouts.app')
@section('meta_title', $area->meta_title)
@section('meta_description', $area->meta_description)
@section('content')
	<!-- Head Section -->
	
	<section class="page-section bg-dark-alfa-{{$area->banner_opacity}} parallax-3" data-background="{{$style->featured_image}}">
		<div class="relative container align-left">
			
			<div class="row">
				
				<div class="col-md-8">
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">{{$style->name}} Kitchens</h1>
					<div class="hs-line-4 font-alt">
						{{$area->banner_subtitle}}
					</div>
				</div>
				
				<div class="col-md-4 mt-30">
					<div class="mod-breadcrumbs font-alt align-right">
						<a href="{{route('pages.welcome.index')}}"> HOME </a>
						<a href="{{route('kitchen.styles.index')}}">/ KITCHEN STYLES</a>
						<a href="{{\Illuminate\Support\Facades\URL::current()}}"> / {{$style->name}} Kitchens</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- End Head Section -->
	<!-- Portfolio Section -->
	<section class="mt-40">
		<div class="container relative text-center">
			<div class="font-alt mb-20">
				<a href="{{route('kitchen.styles.index')}}"> << Back to styles</a>
			</div>
			<!-- Works Filter -->
			<div class="works-filter font-alt align-center">
				<a href="{{$style->getUrl()}}" class="{{blank(request('range')) ? 'active' : ''}}">All ranges in {{$style->name}}</a>
				@foreach($ranges as $range)
				<a href="{{route('kitchen.styles.show', [$style->id, $style->slug, 'range' => $range->id])}}" class="{{request('range') == $range->id ? 'active' : ''}}">{{$range->name}}</a>
				@endforeach
			</div>
			<!-- End Works Filter -->
			
			<!-- Works Grid -->
			<ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white" id="work-grid">
			@foreach($images as $image)
				<!-- Work Item (Lightbox) -->
						<li class="work-item mix {{$image->range->slug}}" style="position: absolute; left: 0px; top: 0px;" >
							<a href="{{$image->image}}" class="work-lightbox-link mfp-image" style="padding-bottom:
							40px!important;">
								<div class="work-img">
									<img src="{{$image->image_thumb}}" alt="{{$image->image_alt}}">
								</div>
								<div class="work-intro">
									<h3 class="work-title" style="margin-bottom: 0px!important; margin-top: 30px!important;">{{\Illuminate\Support\Str::limit($image->title, 47)}}</h3>
								</div>
							</a>
{{--							@if($image->range()->count())--}}
{{--									<a href="{{route('kitchen.ranges.show', [$image->range->id, $image->range->slug])}}" class="work-descr" style="padding-bottom: 25px!important;">--}}
{{--										View range {{$image->range->name}}--}}
{{--									</a>--}}
{{--								@endif--}}
						</li>
						<!-- Work Item (External Page) -->
{{--					@if($image->portfolio)--}}
{{--						<li class="work-item mix branding design">--}}
{{--							<a href="{{route('pages.portfolio.show', [$image->type->slug, $image->portfolio->id, $image->portfolio->slug])}}" class="work-ext-link">--}}
{{--								<div class="work-img">--}}
{{--									<img class="work-img img-lazy-work" src="{{$image->image_thumb}}" data-original="{{$image->image_thumb}}" width="650" height="418" alt="{{$image->image_alt}}" />--}}
{{--								</div>--}}
{{--								<div class="work-intro">--}}
{{--									<h3 class="work-title">{{$image->title}}</h3>--}}
{{--									<div class="work-descr">--}}
{{--										Click to view project--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</a>--}}
{{--						</li>--}}
{{--						<!-- End Work Item -->--}}
{{--					@endif--}}
				@endforeach
			</ul>
			<!-- End Works Grid -->
		</div>
		<div class="row justify-content-center text-center">
			{{$images->appends($_GET)->links()}}
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
