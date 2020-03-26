<div class="col-sm-4 col-md-3 sidebar">
	
	<!-- Search Widget -->
	<div class="widget">
		<form class="form-inline form" role="form" action="{{route('pages.news.index')}}" method="get">
			<div class="search-wrap">
				<button class="search-button animate" type="submit" title="Start Search">
					<i class="fa fa-search"></i>
				</button>
				<input type="text" name="search" class="form-control search-field" placeholder="Search..." value="{{strip_tags(request('search'))}}">
			</div>
		</form>
	</div>
	<!-- End Search Widget -->
	
	<!-- Widget -->
	<div class="widget">
		
		<h5 class="widget-title font-alt">Categories</h5>
		
		<div class="widget-body">
			<ul class="clearlist widget-menu">
				<li>
					<a href="{{route('pages.news.index')}}" title="">All</a>
					<small>
						- {{\App\Modules\News\NewsPost::count()}}
					</small>
				</li>
				@foreach($categories as $cat)
				<li>
					<a href="{{route('pages.news.index', ['category' => $cat->id])}}" title="">{{$cat->name}}</a>
					<small>
						- {{$cat->news->count()}}
					</small>
				</li>
					@endforeach
			</ul>
		</div>
	
	</div>
	<!-- End Widget -->
	
	<!-- Widget -->
{{--	<div class="widget">--}}
{{--		--}}
{{--		<h5 class="widget-title font-alt">Tags</h5>--}}
{{--		--}}
{{--		<div class="widget-body">--}}
{{--			<div class="tags">--}}
{{--				@foreach($sidebar_tags as $tag)--}}
{{--				<a href="{{request()->fullUrlWithQuery(['tags' => $tag->id])}}">{{$tag->name}}</a>--}}
{{--					@endforeach--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	--}}
{{--	</div>--}}
	<!-- End Widget -->
	
	<!-- Widget -->
	<div class="widget hidden-xs">
		
		<h5 class="widget-title font-alt">Last posts</h5>
		
		<div class="widget-body">
			<ul class="clearlist widget-posts">
				@foreach($latest_posts as $latest_post)
					<li class="clearfix">
						<a href="{{route('pages.news.show', [$latest_post->id, $latest_post->slug])}}"><img src="{{$latest_post->featured_image_thumb}}" alt="{{$latest_post->featured_image_alt}}" class="widget-posts-img" style="width: 70px; height: 70px;" /></a>
						<div class="widget-posts-descr">
							<a href="{{route('pages.news.show', [$latest_post->id, $latest_post->slug])}}" title="">{{$latest_post->title}}</a>
							Posted {{$latest_post->published_at->format('d M')}}
						</div>
					</li>
				@endforeach
			</ul>
		</div>
	
	</div>
	<!-- End Widget -->
	
	<!-- Widget -->
	<div class="widget hidden-xs">
		
		<h5 class="widget-title font-alt">Comments</h5>
		
		<div class="widget-body">
			<ul class="clearlist widget-comments">
				@foreach($sidebar_comments as $sidebar_comment)
				<li>
					{{$sidebar_comment->user->name}} on <a href="{{route('pages.news.show', $sidebar_comment->commentable->id)}}" title="">{{$sidebar_comment->content}}</a>
				</li>
					@endforeach
			</ul>
		</div>
	
	</div>
	<!-- End Widget -->
	
	<!-- Widget -->
{{--	<div class="widget">--}}
{{--		--}}
{{--		<h5 class="widget-title font-alt">Text widget</h5>--}}
{{--		--}}
{{--		<div class="widget-body">--}}
{{--			<div class="widget-text clearfix">--}}
{{--				--}}
{{--				<img src="images/user-avatar.png" alt="" width="70" class="img-circle left img-left">--}}
{{--				--}}
{{--				Consectetur adipiscing elit. Quisque magna ante eleifend eleifend.--}}
{{--				Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.--}}
{{--				Quisque magna ante eleifend eleifend.--}}
{{--			--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	--}}
{{--	</div>--}}
	<!-- End Widget -->
	
	<!-- Widget -->
{{--	<div class="widget">--}}
{{--		--}}
{{--		<h5 class="widget-title font-alt">Archive</h5>--}}
{{--		--}}
{{--		<div class="widget-body">--}}
{{--			<ul class="clearlist widget-menu">--}}
{{--				<li>--}}
{{--					<a href="#" title="">February 2014</a>--}}
{{--				</li>--}}
{{--				<li>--}}
{{--					<a href="#" title="">January 2014</a>--}}
{{--				</li>--}}
{{--				<li>--}}
{{--					<a href="#" title="">December 2013</a>--}}
{{--				</li>--}}
{{--			</ul>--}}
{{--		</div>--}}
{{--	--}}
{{--	</div>--}}
	<!-- End Widget -->

</div>
