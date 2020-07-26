@extends('layouts.backend_app')
@section('meta_title', $portfolio->meta_title)
@section('meta_description', $portfolio->meta_description)
@section('content')

	<!-- Head Section -->
	<section class="page-section bg-dark-alfa-30" data-background="{{$portfolio->featured_image}}">
		<div class="relative container align-left">

			<div class="row">

				<div class="col-md-8">
					<h1 class="hs-line-11 no-transp font-alt mb-20 mb-xs-0">{{$portfolio->title}}</h1>
					<div class="hs-line-4 font-alt">
						{{$portfolio->subtitle}}
					</div>
				</div>

				<div class="col-md-4 mt-30">

					<div class="mod-breadcrumbs font-alt align-right">
						<a href="{{route('pages.welcome.index')}}">Home</a>&nbsp;/&nbsp;<a href="{{route('pages.portfolio.index', $portfolio_type->slug)}}">Portfolio</a>&nbsp;/&nbsp;<span>{{$portfolio_type->name}}</span>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Head Section -->


	<!-- Section -->
	<section class="page-section  pb-0">
		<div class="container relative">
			<div class="row">
				<div class="col-md-5 col-lg-4 ">
					<!-- About Project -->
					<div class="text">
						<h3 class="font-alt mb-30 mb-xxs-10">{{$portfolio->title}}</h3>
						<p>
							{{$portfolio->summary}}
						</p>

						<div class="mt-40">
							<a href="#" class="btn btn-mod btn-border btn-round btn-medium" target="_blank">View online</a>
						</div>

					</div>
					<!-- End About Project -->
				</div>
				<div class="col-md-7 col-lg-offset-1">
					<!-- Work Gallery -->
					<div class="work-full-media mt-0 white-shadow">
						<img src="{{$portfolio->featured_image_thumb}}" alt="{{$portfolio->featured_image_alt}}">
					</div>
					<!-- End Work Gallery -->

				</div>

			</div>
			<div class="section-text mb-60 mt-60 mb-sm-40">
				<div class="row">

					<div class="col-md-4 mb-sm-50 mb-xs-30">

						<!-- Project Detail -->
						<div class="work-detail">
							<h5 class="font-alt mt-0 mb-20">Project Details</h5>
							<div class="work-full-detail">
								<p>
									<strong>Client:</strong>
									Envato Users
								</p>
								<p>
									<strong>Date:</strong>
									{{filled($portfolio->completed_at) ? $portfolio->completed_at->format('d M Y') : 'Not Visible'}}
								</p>
								<p>
									<strong>Online:</strong>
									<a href="#" target="_blank">www.rhythm.bestlooker.pro</a>
								</p>
							</div>
						</div>
						<!-- End Project Detail -->

					</div>

					<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
					</div>

					<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
						Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
					</div>

				</div>
			</div>
			<!-- Work Gallery -->
			<div class="work-full-media mb-80 mb-xs-40">
				<div class="row justify-content-center">
					<ul class="clearlist work-full-slider owl-carousel text-center">
						@foreach($portfolio_images as $image)
							<li>
								<img src="{{$image->image}}" alt="{{$image->image_alt}}" />
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<!-- End Work Gallery -->


			<!-- Features Grid -->
			<div class="row multi-columns-row alt-features-grid mb-80 mb-xs-40">

				<!-- Features Item -->
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="alt-features-item align-center">
						<h3 class="alt-features-title font-alt">1. Case study</h3>
						<div class="alt-features-descr align-left">
							{{$portfolio->case_study}}
						</div>
					</div>
				</div>
				<!-- End Features Item -->

				<!-- Features Item -->
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="alt-features-item align-center">
						<h3 class="alt-features-title font-alt">2. Result</h3>
						<div class="alt-features-descr align-left">
							{{$portfolio->result}}
						</div>
					</div>
				</div>
				<!-- End Features Item -->

				<!-- Features Item -->
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="alt-features-item align-center">
						<h3 class="alt-features-title font-alt">3. Experience</h3>
						<div class="alt-features-descr align-left">
							{{$portfolio->experience}}
						</div>
					</div>
				</div>
				<!-- End Features Item -->

			</div>
		</div>
	</section>
	<!-- End Section -->


	<!-- Divider -->
	<hr class="mt-0 mb-0 " />
	<!-- End Divider -->


	<!-- Related Projects -->
	@include('pages.portfolio._includes.related_portfolios')
	<!-- End Related Projects -->


	<!-- Divider -->
	<hr class="mt-0 mb-0 " />
	<!-- End Divider -->


	<!-- Work Navigation -->
	<div class="work-navigation clearfix">
		<a href="portfolio-single-5.html" class="work-prev"><span><i class="fa fa-chevron-left"></i>&nbsp;Previous</span></a>
		<a href="#" class="work-all"><span><i class="fa fa-times"></i>&nbsp;All works</span></a>
		<a href="portfolio-single-2.html" class="work-next"><span>Next&nbsp;<i class="fa fa-chevron-right"></i></span></a>
	</div>
	<!-- End Work Navigation -->


	<!-- Divider -->
	<hr class="mt-0 mb-0 " />
	<!-- End Divider -->
@endsection
