@extends('layouts.app')
@section('meta_title', $area->meta_title)
@section('meta_description', $area->meta_description)
@section('content')
	
	@foreach($styles as $style)
		<!-- Section -->
		<section class="page-section fixed-height-small pt-0 pb-0 bg-dark-alfa-50" data-background="{{$style->featured_image}}">
			<div class="js-height-parent container relative">
				
				<div class="home-content">
					<div class="home-text">
						
						
						<h2  class=" font-alt mb-50 mb-xs-30 text-center">{{$style->name}}
						</h2>
						
						<div>
							<a href="{{route('bedroom.styles.show', [$style->id, $style->slug])}}" class=" btn btn-mod btn-border-w btn-medium btn-round">View {{$style->name}} Bedrooms</a>
						</div>
					
					</div>
				</div>
			
			</div>
		</section>
		<!-- End Section -->
	@endforeach

@endsection
