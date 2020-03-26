@extends('layouts.app')

@section('content')
	@php
		$area = \App\Modules\Areas\Area::where('route_name', 'pages.welcome.index')->first()
	@endphp
	<!-- Head Section -->
	<section class="page-section bg-dark-alfa-{{$area->banner_opacity}} parallax-3" data-background="{{$area->banner_image}}">
		<div class=" container ">
			
			<div class="row text-center">
				
				<div>
					<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Login</h1>
				
				</div>
			
			</div>
		</div>
		
	</section>
	<!-- End Head Section -->
	
	
	<!-- Section -->
	<section class="page-section">
		<div class="container relative">
			
			<!-- Nav Tabs -->
			<div class="align-center mb-40 mb-xxs-30">
				<ul class="nav nav-tabs tpl-minimal-tabs">
					
					<li class="active">
						<a>Login</a>
					</li>
					
					<li>
						<a href="{{route('register')}}">Registration</a>
					</li>
				
				</ul>
			</div>
			<!-- End Nav Tabs -->
			
			<!-- Tab panes -->
			<div class="tab-content tpl-minimal-tabs-cont section-text">
				<!-- Login Form -->
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						
						<form action="{{route('login')}}" class="form contact-form" id="contact_form" method="post">
                            @csrf
							<div class="clearfix">
								
								<!-- Username -->
								<div class="form-group">
									<input type="text" name="email" id="username" class="input-md round form-control" placeholder="Email" pattern=".{3,100}" required>
								</div>
								
								<!-- Password -->
								<div class="form-group">
									<input type="password" name="password" id="password" class="input-md round form-control" placeholder="Password" pattern=".{5,100}" required>
								</div>
							
							</div>
							
							<div class="clearfix">
								
								<div class="cf-left-col">
									
									<!-- Inform Tip -->
									<div class="form-tip pt-20">
										<a href="">Forgot Password?</a>
									</div>
								
								</div>
								
								<div class="cf-right-col">
									
									<!-- Send Button -->
									<div class="align-right pt-10">
										<button class="submit_btn btn btn-mod btn-medium btn-round" id="login-btn">Login</button>
									</div>
								
								</div>
							
							</div>
						
						</form>
					
					</div>
				</div>
				<!-- End Login Form -->
			</div>
		
		</div>
		<br />
		<p style="margin-left:265px">OR</p>
		<br />
		<div class="form-group">
			<div class="col-md-8 col-md-offset-4">
				<a href="{{url('/redirect')}}" class="btn btn-primary">Login with Facebook</a>
			</div>
		</div>
	</section>
	<!-- End Section -->

@endsection
