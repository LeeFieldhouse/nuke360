<div class="mb-80 mb-xs-40" id="comments">
	
	<h4 class="blog-page-title font-alt">Comments<small class="number">({{$post->comments->count()}})</small></h4>
	
	<ul class="media-list text comment-list clearlist">
	
	@foreach($post->comments as $comment)
		@php
		$comment_user = $comment->user;
		@endphp
		<!-- Comment Item -->
			<li class="media comment-item">
				
				<a class="pull-left" href="#"><img class="media-object comment-avatar" src="{{$comment_user->avatar}}" alt="" width="50" height="50"></a>
				
				<div class="media-body">
					
					<div class="comment-item-data">
						<div class="comment-author">
							<a href="{{route('users.profiles.show', [$comment_user->id])}}">{{$comment_user->name}}</a>
						</div>
						{{$comment->created_at->format('M d, Y')}}, at {{$comment->created_at->format('H:i:s')}}<span class="separator">&mdash;</span>
						<a href="#add-comment"><i class="fa fa-comment"></i>&nbsp;Reply</a>
					</div>
					
					<p>
						{{$comment->content}}
					</p>
					
					<!-- Comment of second level -->
					@if($comment->children->count())
						@foreach($comment->children as $reply)
							@php
							$reply_user = $reply->user;
							@endphp
						<div class="media comment-item">
							
							<a class="pull-left" href="#"><img class="media-object comment-avatar" src="{{$reply_user->avatar}}" alt=""></a>
							
							<div class="media-body">
								
								<div class="comment-item-data">
									<div class="comment-author">
										<a href="{{route('users.profiles.show', [$reply_user->id])}}">{{$reply_user->name}}n</a>
									</div>
									{{$reply_user->created_at->format('M d, Y')}}, at {{$reply_user->created_at->format('H:m')}}<span class="separator">&mdash;</span>
									<a href="#add-comment"><i class="fa fa-comment"></i>&nbsp;Reply</a>
								</div>
								
								<p>
									<a href="{{route('users.profiles.show', $reply->parent->user->id)}}">{{$reply->parent ? '#' . $reply->parent->user->name : ''}} </a>{{$reply->content}}
								</p>
							
							
							</div>
						
						</div>
						@endforeach
				@endif
				<!-- End Comment of second level -->
				
				</div>
			
			</li>
	@endforeach
	<!-- End Comment Item -->
	
	</ul>

</div>
@include('pages._includes.comments.create')
