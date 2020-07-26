@extends('layouts.backend_app')
@section('meta_title', $post->meta_title)
@section('meta_description', $post->meta_description)
@section('content')
	<!-- Head Section -->
	@include('pages._includes.banners.area.index')
	<!-- End Head Section -->


	<!-- Section -->
	<section class="page-section">
		<div class="container relative">

			<div class="row">

				<!-- Sidebar -->
				@include('pages.news._includes.sidebar')
				<!-- End Sidebar -->

				<!-- Content -->
				<div class="col-sm-8 col-md-offset-1">

					<!-- Post -->
					<div class="blog-item mb-80 mb-xs-40">

						<!-- Text -->
						<div class="blog-item-body">

							<h1 class="mt-0 font-alt">{{$post->title}}</h1>

							<div class="lead">
								<p>
									{{$post->summary}}
								</p>
							</div>
							<!-- End Text -->

							<!-- Media Gallery -->
							<div class="blog-media mt-40 mb-40 mb-xs-30">

										<img src="{{$post->featured_image_thumb}}" alt="{{$post->featured_image_alt}}" />

							</div>
							{!! $post->content !!}
						<!-- End Text -->
							<br>
							<br>
							<br>
					</div>
					<!-- End Post -->

					<!-- Comments -->
					@include('pages._includes.comments.index')
					<!-- End Comments -->

					<!-- Prev/Next Post -->
					<div class="clearfix mt-40">
						<a href="#" class="blog-item-more left"><i class="fa fa-angle-left"></i>&nbsp;Prev post</a>
						<a href="#" class="blog-item-more right">Next post&nbsp;<i class="fa fa-angle-right"></i></a>
					</div>
					<!-- End Prev/Next Post -->

				</div>
				<!-- End Content -->

			</div>

		</div>
	</section>
	<!-- End Section -->
	@endsection
