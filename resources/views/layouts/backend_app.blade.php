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
	<link rel="stylesheet" href="/assets/css/dashlite.css?ver=1.3.0">
	<link id="skin-default" rel="stylesheet" href="/assets/css/theme.css?ver=1.3.0">


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
	<div class="nk-app-root">
		<!-- main @s -->
		<div class="nk-main ">
			<!-- sidebar @s -->
			@include('layouts._includes.backend_navbar')
			<!-- sidebar @e -->

				<!-- content @s -->
			@yield('content')
			<!-- content @e -->
				<!-- Footer -->
{{--			@include('layouts._includes.backend_footer')--}}
			<!-- End Footer -->
			</div>
			<!-- wrap @e -->
		</div>
		<!-- main @e -->
	</div>
	<!-- app-root @e -->
	

	
	<!-- JavaScript -->
	<script src="/assets/js/bundle.js?ver=1.3.0"></script>
	<script src="/assets/js/scripts.js?ver=1.3.0"></script>
	<script src="/assets/js/charts/gd-general.js?ver=1.3.0"></script>
@yield('scripts')


<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7348542.js"></script>
	<!-- End of HubSpot Embed Code -->
</body>
</html>
