@extends('layouts.backend_app')
@section('meta_title', $area->meta_title)
@section('meta_description', $area->meta_description)
@section('content')
	
	
	<!-- Head Section -->
	@include('pages._includes.banners.area.index')
	<!-- End Head Section -->
	
	
	<!-- About Section -->
	<section class="mt-40 mb-40" id="about">
		<div class="container relative">
			
			<div class="section-text mb-50 mb-sm-20">
				<div class="row text-center hidden-md hidden-lg mb-20" style="height: 27px;">
					<!-- Social Links -->

						<div class="footer-social-links">
							<a href="tel:01934876321"><i class="fa fa-phone"></i></a>
							<a href="mailto:{{$settings->email}}"><i class="fa fa-envelope"></i></a>
							@foreach($social_links as $social_link)
								<a href="{{$social_link->url}}" title="{{$social_link->name}}" target="_blank"><i class="{{$social_link->class}}"></i></a>
							@endforeach
						</div>

					<!-- End Social Links -->
				</div>
				<div class="row">
					
					<div class="col-md-4 hidden-xs hidden-sm ">
						<blockquote>
							<ul class="list-unstyled ">
								<li>
									<a href="tel:01934876321" class="btn btn-mod btn-border btn-large btn-round" style="width: 100%;  text-align: left;"><i class="fa fa-phone"></i> Call 01934 876 321</a>
								</li>
								
								@foreach ($social_links as $social_link)
									<li>
										<a href="{{$social_link->url}}" target="_blank" class="btn btn-mod btn-border btn-large btn-round" style="width: 100%;  text-align: left;"><i class="{{$social_link->class}}"></i> View on {{$social_link->name}}
										</a></li>
								
								@endforeach
							
							</ul>
						</blockquote>
					</div>
					
					<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
						<p><strong>nuke360 Ltd</strong> was
							<strong>established in 1994</strong> by Sue and Keith Fieldhouse. nuke360 is recognised as one of Bristol’s leading suppliers and installers of beautiful and distinctive bespoke kitchens and bedrooms. Our philosophy is to offer a product that is of superior quality at an affordable price.
						</p>
						
						<p>Our small team pride ourselves on providing a Professional, Friendly and Personal Service.</p>
					</div>
					
					<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
						<p>We love to design and we truly enjoy seeing our customers happy with the results of their new room, maybe that is why the majority of our new customers come recommended.</p>
						
						<p>We treat our customers as we would like to be treated ourselves. We do not believe in pressure selling, so you can relax and enjoy being guided through the experience of creating your ideal room.</p>
					</div>
				
				</div>
			</div>
			
			
			<div class="row">
				
				<!-- Team item -->
				@foreach($team_members as $team_member)
					<div class="col-sm-4 mb-xs-30 wow fadeInUp">
						<div class="team-item">
							
							<div class="team-item-image">
								
								<img src="{{$team_member->image_thumb}}" alt="{{$team_member->image_alt}}" />
								
								<div class="team-item-detail">
									
									{{--									<h4 class="font-alt normal">Hello & Welcome!</h4>--}}
									
									{{$team_member->content}}
									
									{{--									<div class="team-social-links">--}}
									{{--										@foreach($team_member->socialLinks as $member_social_link)--}}
									{{--											<a href="{{$member_social_link->url}}" target="_blank"><i class="{{$member_social_link->class}}"></i></a>--}}
									{{--										@endforeach--}}
									{{--									</div>--}}
								
								</div>
							</div>
							
							<div class="team-item-descr font-alt">
								
								<div class="team-item-name">
									{{$team_member->name}}
								</div>
								
								<div class="team-item-role">
									{{$team_member->position}}
								</div>
							
							</div>
						
						</div>
					</div>
			@endforeach
			<!-- End Team item -->
			
			</div>
		
		</div>
	</section>
	<!-- End About Section -->
	<!-- Call Action Section -->
	<section class="small-section bg-dark mt-40">
		<div class="container relative">
			
			<div class="align-center">
				<h3 class="banner-heading font-alt">We Offer A No Obligation Free Design Consultation</h3>
				<div>
					<a href="{{route('pages.contact.index')}}" class="btn btn-mod btn-w btn-medium btn-round">Book Now</a>
				</div>
			</div>
		
		</div>
	</section>
	<!-- End Call Action Section -->
@endsection
