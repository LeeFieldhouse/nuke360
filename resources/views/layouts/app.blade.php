<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('meta_tags')
	@if(env('APP_DEBUG') == 'true')
		<meta name="robots" content="noindex,nofollow">
	@endif
	
	<title>{{ config('app.name', 'Laravel') }} | nuke360</title>
	
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
	<!-- Select2 -->
	<link href="/assets/select2/css/select2.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Iconmoon -->
	<link href="/assets/iconmoon/css/iconmoon.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="/assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="/assets/css/custom.css" rel="stylesheet">


@yield('end_header')

<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160451560-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());

		gtag('config', 'UA-160451560-1');
	</script>
</head>
<body>

@include('layouts._includes.navbar')
<!-- sidebar @e -->
	
	<!-- content @s -->
@yield('content')
<!-- content @e -->
	<!-- Footer -->
@include('layouts._includes.footer')
<!-- End Footer -->
	
	<!-- Scroll to top -->
	<a href="#" class="scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootsrap JS -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- Select2 JS -->
	<script src="assets/select2/js/select2.min.js"></script>
	<!-- Match Height JS -->
	<script src="assets/matchHeight/js/matchHeight-min.js"></script>
	<!-- Owl Carousal JS -->
	<script src="assets/owl-carousel/js/owl.carousel.min.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
	
	
	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7348542.js"></script>
	<!-- End of HubSpot Embed Code -->
	
	@yield('scripts')
</body>
</html>
