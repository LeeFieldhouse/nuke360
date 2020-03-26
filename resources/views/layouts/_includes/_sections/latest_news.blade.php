@php
	$latest_news = \App\Modules\News\NewsPost::latest()->take(3)->get();
@endphp

<section class="page-section" id="news">
	<div class="container relative">
		
		<h2 class="section-title font-alt align-left mb-70 mb-sm-40">
			Latest News
			
			<a href="{{route('pages.news.index')}}" class="section-more right">All News in our blog
				<i class="fa fa-angle-right"></i></a>
		
		</h2>
		
		<div class="row multi-columns-row justify-content-center text">
			
			<!-- Post Item -->
			@foreach($latest_news as $news_item)
				@php
					$news_link = route('pages.news.show', [$news_item->id, $news_item->slug]);
				@endphp
				<div class="col-sm-6 col-md-4 col-lg-4">
					<div class="alt-features-item align-center" style="margin-top: 25px!important">
						<a href="{{$news_link}}" class="alt-features-icon">
							<img src="{{$news_item->featured_image_thumb}}" alt="{{$news_item->image_alt}}">
						</a>
						<a href="{{$news_link}}" style="text-decoration: none;">
							<h3 style="height: 36px; overflow: hidden;" class="alt-features-title font-alt text-left">{{\Illuminate\Support\Str::limit($news_item->title, 51)}}
							</h3>
						</a href="{{$news_link}}" style="text-decoration: none;">
						<div class="alt-features-descr align-left" style="height: 120px; overflow: hidden;">
							{{\Illuminate\Support\Str::limit($news_item->summary, 213)}}
						</div>
						<div class="mb-10 text-left">
							<a href="{{$news_link}}" class="btn btn-mod btn-border btn-small btn-round">Read More ></a>
						</div>
					</div>
				</div>
			{{--				<div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn text-center" data-wow-delay="0.1s" data-wow-duration="2s">--}}
			{{--					--}}
			{{--					<div class="post-prev-img">--}}
			{{--						<a href="{{route('pages.news.show', [$news_item->id, $news_item->slug])}}"><img style="height: 202px!important; width:360px!important;" src="{{$news_item->featured_image_thumb}}" alt="{{$news_item->featured_image_alt}}" /></a>--}}
			{{--					</div>--}}
			{{--					--}}
			{{--					<div class="post-prev-title font-alt">--}}
			{{--						<a href="">{{\Illuminate\Support\Str::limit($news_item->title, 35)}}</a>--}}
			{{--					</div>--}}
			{{--					--}}
			{{--					<div class="post-prev-info font-alt">--}}
			{{--						<a href="">{{$news_item->author->name}}</a> | {{$news_item->published_at->format('d M')}}--}}
			{{--					</div>--}}
			{{--					--}}
			{{--					<div class="post-prev-text">--}}
			{{--						{{\Illuminate\Support\Str::limit($news_item->summary, 129)}}--}}
			{{--					</div>--}}
			{{--					--}}
			{{--					<div class="post-prev-more">--}}
			{{--						<a href="" class="btn btn-mod btn-gray btn-round">Read More--}}
			{{--							<i class="fa fa-angle-right"></i></a>--}}
			{{--					</div>--}}
			{{--				--}}
			{{--				</div>--}}
		@endforeach
		<!-- End Post Item -->
		
		</div>
	
	</div>
</section>
