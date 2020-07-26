@extends('layouts.backend_app')

@section('content')
	<div class="" >

		<div class="nk-split nk-split-page nk-split-md" >
			<div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container w-lg-45">
				<div class="absolute-top-right d-lg-none p-3 p-sm-5">
					<a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
				</div>
				<div class="nk-block nk-block-middle nk-auth-body" style="margin-top: 64px;">
					<div class="nk-block-head">
						<div class="nk-block-head-content"><h5 class="nk-block-title">Register</h5>
							<div class="nk-block-des"><p>Create New nuke360 Account</p></div>
						</div>
					</div>
					@if($errors->count())
						<div class="example-alert">
							<div class="alert alert-fill alert-danger alert-dismissible alert-icon">
								<em class="icon ni ni-cross-circle"></em> <strong>Error</strong>! {{$errors->first()}}. <button class="close" data-dismiss="alert"></button>
							</div>
						</div>
					@endif
					<form action="/register" method="post">
						@csrf
						<div class="form-group">
							<label class="form-label" for="name">Name</label><input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Enter your name">
						</div>
						<div class="form-group">
							<label class="form-label" for="email">Email</label><input type="text" class="form-control form-control-lg" name="email" id="email" placeholder="Enter your email address">
						</div>
						<div class="form-group"><label class="form-label" for="password">Password</label>
							<div class="form-control-wrap">
								<a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password"><em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
							</div>
						</div>
						<div class="form-group"><label class="form-label" for="password">Password confirmation</label>
							<div class="form-control-wrap">
								<a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password"><em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input type="password" name="password_confirmation" class="form-control form-control-lg" id="password" placeholder="Enter your password">
							</div>
						</div>
						<div class="form-group">
							<div class="custom-control custom-control-xs custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="checkbox"><label class="custom-control-label" for="checkbox">I agree to nuke360's
									<a tabindex="-1" href="{{route('privacy-policy')}}">Privacy Policy</a> &amp;
									<a tabindex="-1" href="{{route('cookie-policy')}}"> Cookie Policy.</a></label>
							</div>
							{!! htmlFormSnippet() !!}
						</div>
						<div class="form-group">
							<button class="btn btn-lg btn-primary btn-block">Register</button>
						</div>
					</form>
					<div class="form-note-s2 pt-4"> Already have an account ?
						<a href="/general/pages/auths/auth-login.html"><strong>Sign in instead</strong></a></div>
					<div class="text-center pt-4 pb-3"><h6 class="overline-title overline-title-sap"><span>OR</span>
						</h6>
					</div>
					<ul class="nav justify-center gx-8">
						<li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Google</a></li>
					</ul>
				</div>

			</div>
			<div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right toggle-screen-lg" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
				<div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
					<div class="slider-init slick-initialized slick-slider slick-dotted" data-slick="{&quot;dots&quot;:true, &quot;arrows&quot;:false}">
						<div class="slick-list draggable">
							<div class="slick-track" style="opacity: 1; width: 3234px; transform: translate3d(-1386px, 0px, 0px);">
								<div class="slider-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 462px;" tabindex="-1">
									<div class="nk-feature nk-feature-center">
										<div class="nk-feature-img">
											<img class="round" src="/images/slides/promo-c.png" srcset="/images/slides/promo-c2x.png 2x" alt="">
										</div>
										<div class="nk-feature-content py-4 p-sm-5"><h4>Dashlite</h4>
											<p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
										</div>
									</div>
								</div>
								<div class="slider-item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 462px;" tabindex="-1" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
									<div class="nk-feature nk-feature-center">
										<div class="nk-feature-img">
											<img class="round" src="/images/slides/promo-a.png" srcset="/images/slides/promo-a2x.png 2x" alt="">
										</div>
										<div class="nk-feature-content py-4 p-sm-5"><h4>Dashlite</h4>
											<p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
										</div>
									</div>
								</div>
								<div class="slider-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 462px;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
									<div class="nk-feature nk-feature-center">
										<div class="nk-feature-img">
											<img class="round" src="/images/slides/promo-b.png" srcset="/images/slides/promo-b2x.png 2x" alt="">
										</div>
										<div class="nk-feature-content py-4 p-sm-5"><h4>Free welcome offer</h4>
											<p>That's right, this is a free welcome offer. Sign up and get started..</p>
										</div>
									</div>
								</div>
								<div class="slider-item slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 462px;" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
									<div class="nk-feature nk-feature-center">
										<div class="nk-feature-img">
											{{--										<img class="round" src="/images/slides/promo-c.png" srcset="/images/slides/promo-c2x.png 2x" alt="">--}}
											<iframe style="width: 100%; height: 260px;" src="/storage/register-test-video.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
										<div class="nk-feature-content py-4 p-sm-5"><h4>Free welcome offer</h4>
											<p>That's right, this is a free welcome offer. Sign up and get started..</p>
										</div>
									</div>
								</div>
								{{--							<div class="slider-item slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" style="width: 462px;" tabindex="-1">--}}
								{{--								<div class="nk-feature nk-feature-center">--}}
								{{--									<div class="nk-feature-img">--}}
								{{--										<img class="round" src="/images/slides/promo-a.png" srcset="/images/slides/promo-a2x.png 2x" alt="">--}}
								{{--									</div>--}}
								{{--									<div class="nk-feature-content py-4 p-sm-5"><h4>Dashlite</h4>--}}
								{{--										<p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>--}}
								{{--									</div>--}}
								{{--								</div>--}}
								{{--							</div>--}}
								{{--							<div class="slider-item slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 462px;" tabindex="-1">--}}
								{{--								<div class="nk-feature nk-feature-center">--}}
								{{--									<div class="nk-feature-img">--}}
								{{--										<img class="round" src="/images/slides/promo-b.png" srcset="/images/slides/promo-b2x.png 2x" alt="">--}}
								{{--									</div>--}}
								{{--									<div class="nk-feature-content py-4 p-sm-5"><h4>Dashlite</h4>--}}
								{{--										<p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>--}}
								{{--									</div>--}}
								{{--								</div>--}}
								{{--							</div>--}}
								{{--							<div class="slider-item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 462px;" tabindex="-1">--}}
								{{--								<div class="nk-feature nk-feature-center">--}}
								{{--									<div class="nk-feature-img">--}}
								{{--										<img class="round" src="/images/slides/promo-c.png" srcset="/images/slides/promo-c2x.png 2x" alt="">--}}
								{{--									</div>--}}
								{{--									<div class="nk-feature-content py-4 p-sm-5"><h4>Dashlite</h4>--}}
								{{--										<p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>--}}
								{{--									</div>--}}
								{{--								</div>--}}
								{{--							</div>--}}
							</div>

						</div>

						{{--					<ul class="slick-dots" style="" role="tablist">--}}
						{{--						<li class="" role="presentation">--}}
						{{--							<button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="-1">1</button>--}}
						{{--						</li>--}}
						{{--						<li role="presentation" class="">--}}
						{{--							<button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button>--}}
						{{--						</li>--}}
						{{--						<li role="presentation" class="slick-active">--}}
						{{--							<button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="0" aria-selected="true">3</button>--}}
						{{--						</li>--}}
						{{--					</ul>--}}

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
