@extends('layouts.app')
@section('meta_title', $area->meta_title)
@section('meta_description', $area->meta_description)
@section('end_header')
	{!! htmlScriptTagJsApi() !!}
	@endsection
@section('content')
	
	
	<!-- Head Section -->
	{{--		@include('pages._includes.banners.area.index')--}}
	<!-- End Head Section -->
	<!-- Google Map -->
	<div class="google-map">
		{!! $settings->google_map_iframe !!}
	</div>
	<!-- End Google Map -->
	<!-- Contact Section -->
	<section class="">
		<div class="container text-center">
			<h2 class="blog-page-title font-alt">Contact Us</h2>
			
			
			<!-- Pricing row -->
			<div class="row multi-columns-row">
				
				<!-- Pricing Item -->
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="pricing-item">
						<div class="pricing-item-inner">
							<div class="pricing-wrap" style="padding-bottom: 0!important;">
								
								<!-- Icon (Simple-line-icons) -->
								<div class="pricing-icon">
									<i class="fa fa-phone"></i>
								</div>
								
								<!-- Pricing Title -->
								<div class="pricing-title">
									Contact Details
								</div>
								
								<!-- Pricing Features -->
								<div class="pricing-features font-alt">
									<ul class="sf-list pr-list" style="margin-bottom: 0;">
										<li><a href="{{$settings->phone}}">{{$settings->phone}}</a></li>
										<li><a href="{{$settings->email}}">{{$settings->email}}</a></li>
										<li>
											<p class="footer-social-links">
												@foreach($social_links as $link)
													<a href="{{$link->link}}" title="{{$link->name}}"><i class="{{$link->class}}"></i></a>
												@endforeach
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Pricing Item -->
				
				<!-- Pricing Item -->
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="pricing-item main">
						<div class="pricing-item-inner">
							<div class="pricing-wrap" style="padding-bottom: 0!important;">
								
								<!-- Icon (Simple-line-icons) -->
								<div class="pricing-icon">
									<i class="fa fa-map-marker"></i>
								</div>
								
								<!-- Pricing Title -->
								<div class="pricing-title">
									Showroom Address
								</div>
								
								<!-- Pricing Features -->
								<div class="pricing-features font-alt">
									<ul class="sf-list pr-list" style="margin-bottom: 0;">
										<li>
											15 Market Industrial Estate
										</li>
										<li>Yatton, Bristol</li>
										<li style="height: 53px;">BS49 4RF</li>
									
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Pricing Item -->
				
				<!-- Pricing Item -->
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="pricing-item ">
						<div class="pricing-item-inner">
							<div class="pricing-wrap" style="padding-bottom: 0!important;">
								
								<!-- Icon (Simple-line-icons) -->
								<div class="pricing-icon">
									<i class="fa fa-clock-o"></i>
								</div>
								
								<!-- Pricing Title -->
								<div class="pricing-title">
									Opening Hours
								</div>
								
								<!-- Pricing Features -->
								<div class="pricing-features font-alt">
									<ul class="sf-list pr-list" style="margin-bottom: 0;">
										<li>
											Monday - Friday: 9:00 - 17:30
										</li>
										<li>Saturday: 9:00 - 15:00</li>
										<li style="height: 53px;">Sunday: closed</li>
									
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Pricing Item -->
			
			
			</div>
			<!-- End Pricing row -->
		
		</div>
	</section>
	<section class="mb-50" id="contact">
		<div class="container relative">
			<!-- Contact Form -->
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					@if(session('success'))
						<div class="alert success"><i class="fa fa-lg fa-check-circle-o"></i> {{session('success')}}
						</div>
					@endif
					@if($errors->any())
						<div class="alert error"><i class="fa fa-lg fa-check-circle-o"></i> {{$errors->first()}}</div>
					@endif
					<form class="" method="post" action="{{route('pages.contact.store')}}">
						@csrf
						<div class="clearfix">
							
							<div class="cf-left-col">
								
								<!-- Name -->
								<div class="form-group">
									<input type="text" name="name" id="name" class="input-md round form-control" placeholder="Name" pattern=".{3,100}" value="{{auth()->check() ? auth()->user()->name : ''}}" required>
								</div>
								
								<!-- Email -->
								<div class="form-group">
									<input type="email" name="email_address" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" value="{{auth()->check() ? auth()->user()->email : old('email')}}" required>
								</div>
								
								<!-- Phone -->
								<div class="form-group">
									<input type="number" name="phone_number" id="phone_number" class="input-md round form-control" placeholder="Phone Number" value="{{old("phone_number")}}" required>
								</div>
							
							</div>
							
							<div class="cf-right-col">
								
								<!-- Message -->
								<div class="form-group">
									<textarea name="enquiry" id="message" class="input-md round form-control" style="height: 134px;" placeholder="Message" required>{{old('enquiry')}}</textarea>
								</div>
							
							</div>
						
						</div>
						<label class="checkbox-inline mb-20">
							<input type="checkbox" name="subscribe_to_newsletter"  value="1"><strong>Tick to subscribe to our newsletter.</strong> We will not give your information to any third party at all. We just want to send you home design related emails now and again.
						</label>
						<div class="clearfix">
							
							<div class="cf-left-col">
								
								<!-- Inform Tip -->
								<div class="form-tip pt-0">
									<div>
										{!! htmlFormSnippet() !!}
{{--										@if ($errors->has('g-recaptcha-response'))--}}
{{--											<span class="invalid-feedback" style="display: block;">--}}
{{--												<strong class="alert-danger">{{ $errors->first('g-recaptcha-response') }}</strong>--}}
{{--											</span>--}}
{{--										@endif--}}
									</div>
								</div>
							
							</div>
							
							<div class="cf-right-col">
								
								<!-- Send Button -->
								<div class="align-right pt-10">
									<button type="submit" class="btn btn-mod btn-border btn-medium btn-round" id="submit_btn">Submit Message</button>
								</div>
							</div>
						
						</div>
						

						<div id="result"></div>
					</form>
				
				</div>
			</div>
			<!-- End Contact Form -->
		
		</div>
	</section>
	<!-- End Contact Section -->


@endsection
