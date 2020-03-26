<section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="{{\App\Modules\Areas\Area::first()->banner_image}}">
	<!-- Slide Item -->
	@foreach($reviews as $review)
	<div>
		<div class="container relative">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 align-center">
					<!-- Section Icon -->

					<!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
					<blockquote class="review white">
							{!! $review->content !!}
						<div class="section-icon">
							<a href="{{$review->url}}"><i class="fa fa-facebook"></i></a>
						</div>
						<footer class="review-author">
							{{$review->name}}
						</footer>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<!-- End Slide Item -->


</section>
