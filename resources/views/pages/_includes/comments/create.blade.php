@guest
	<div class="mb-80 mb-xs-40" id="add-comment">
		
		<h4 class="blog-page-title font-alt">Leave a comment</h4>
		<div class="alert success">
			<i class="fa fa-lg fa-user"></i> <a href="{{route('login')}}">Sign In</a> Or <a href="{{route('register')}}">Register</a> To Post a Comment
		</div>
	
	</div>
@endguest

@auth
	<!-- Add Comment -->
	<div class="mb-80 mb-xs-40" id="add-comment">
		
		<h4 class="blog-page-title font-alt">Leave a comment</h4>
		
		<!-- Form -->
		<form method="post" action="{{route('pages.news.comments.store', [$post->id, $post->slug])}}" id="form" role="form" class="form">
			@csrf
			<!-- Comment -->
			<div class="mb-30 mb-md-10">
				<textarea name="content" id="text" class="input-md form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
			</div>
			
			<!-- Send Button -->
			<p>Posting as {{auth()->user()->name}}</p>
			<button type="submit" class="btn btn-mod btn-medium">
				Submit comment
			</button>
		
		</form>
		<!-- End Form -->
	
	</div>
	<!-- End Add Comment -->
@endauth
