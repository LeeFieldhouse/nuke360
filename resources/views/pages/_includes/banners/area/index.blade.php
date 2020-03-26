<section class="page-section bg-dark-alfa-{{$area->banner_opacity}} parallax-3" data-background="{{$area->banner_image}}">
	<div class="relative container align-left">
		
		<div class="row">
			
			<div class="col-md-8">
				<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">{{$area->banner_title}}</h1>
				<div class="hs-line-4 font-alt">
					{{$area->banner_subtitle}}
				</div>
			</div>
			
			<div class="col-md-4 mt-30">
				<div class="mod-breadcrumbs font-alt align-right">
					{!! $area->bread_crumb !!}
					@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'pages.news.show')
						<a href="{{route('pages.news.show', [$post->id, $post->slug])}}">/ {{$post->title}} </a></div>
				@endif
			</div>
		</div>
	</div>

</section>
