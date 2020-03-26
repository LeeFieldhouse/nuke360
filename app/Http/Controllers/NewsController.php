<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Modules\Areas\Area;
use App\Modules\News\NewsPost;
use App\Modules\News\NewsTag;
use App\Traits\ControllerAreaTrait;
use Carbon\Carbon;

class NewsController extends Controller
{
	use ControllerAreaTrait;
	
	public function index()
	{
		$news = NewsPost::getIndexNewsPosts();
		$news = $news->paginate(4);
		return view(
			'pages.news.index',
			[
				'area'             => $this->area,
				'news'             => $news,
				'categories'       => \App\Modules\News\NewsCategory::all(),
				'latest_posts'     => \App\Modules\News\NewsPost::latest()->take(5)->get(),
				'sidebar_comments' => \App\Comment::where('commentable_type', \App\Modules\News\NewsPost::class)
					->latest()
					->take(5)
					->get(),
				'sidebar_tags' => NewsTag::whereHas('posts')->get()
			]
		);
	}
	
	
	public function show(NewsPost $news_post_id, $slug = NULL)
	{
		$news_item = $news_post_id;
		
		if ($news_item->slug !== $slug) {
			return redirect()->route('pages.news.show', [$news_item->id, $news_item->slug]);
		}
		
		$area = Area::where(
			'route_name',
			'pages.news.index'
		)->first();
		
		return view(
			'pages.news.show',
			[
				'area' => $area,
				'post'             => $news_item,
				'categories'       => \App\Modules\News\NewsCategory::all(),
				'latest_posts'     => \App\Modules\News\NewsPost::latest()->take(5)->get(),
				'sidebar_comments' => \App\Comment::where('commentable_type', \App\Modules\News\NewsPost::class)
					->latest()
					->take(5)
					->get(),
				'sidebar_tags' => NewsTag::whereHas('posts')->get()
			]
		);
	}
	
	public function storeComment(NewsPost $news_post_id)
	{
		$user = auth()->user();
		$comment = request()->input('content');
		Comment::create([
			'commentable_type' => get_class($news_post_id),
			'commentable_id' => $news_post_id->id,
			'content' => $comment,
			'author_id' => $user->id
		]);
		
		return redirect()->back();
	}
}
