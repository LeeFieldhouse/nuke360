<?php

namespace App\Modules\News;

use App\Admin;
use App\Comment;
use App\Traits\ImageAttributeTrait;
use App\Traits\ImageWithThumbResizeTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\File;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class NewsPost extends Model
{
	use ImageWithThumbResizeTrait;
	use ImageAttributeTrait;
	
	protected $guarded = [];
	protected $casts = [
		'published_at' => 'dateTime'
	];
	
	public function author()
	{
		return $this->belongsTo(Admin::class, 'author_id');
	}
	
	public function categories()
	{
		return $this->belongsToMany(NewsCategory::class);
	}
	
	public function tags()
	{
		return $this->belongsToMany(NewsTag::class);
	}
	
	public function comments()
	{
		return $this->morphMany(Comment::class, 'commentable');
	}
	
	public function getFeaturedImageAttribute($value)
	{
		return $this->getImage($value);
	}
	
	public function getFeaturedImageThumbAttribute($value)
	{
		return $this->getImageThumb($value);
	}
	
	public function setFeaturedImageAttribute($image)
	{
		// if you ignore console rules (true) you will create resizes image and a thumb and store it in the folders from the image you provide
		// ignore console rules does not working with url images!!
		// to make ignore console rules work you must use an image in our storage public folder
		$this->setImage('featured_image', $image, 'news_posts',  750, 360, true, 400, 192);

	}
	
	public static function getIndexNewsPosts()
	{
		$news_latest = self::latest();
		$news = $news_latest;
		$from_date = request('from_date');
		$to_date = request('to_date');
		if ($from_date || $to_date) {
			$news = $news->whereBetween('published_at', [Carbon::parse($from_date), Carbon::parse($to_date)]);
		}
		
		if ($category = request('category')) {
			$news = $news->whereHas(
				'categories',
				function ($cat) use ($category) {
					$cat->where('news_categories.id', $category);
				}
			);
		}
		
		if ($year = request('year')) {
			$news = $news->whereYear('published_at', $year);
		}
		
		if ($search = request('search')) {
			$news = $news->where('title', 'like', '%' . $search . '%')
				->orWhere('summary', 'like', '%' . $search . '%')
				->orWhere('content', 'like', '%' . $search . '%')
				->orWhere(
					function ($query) use ($search) {
						$query->whereHas(
							'author',
							function ($author) use ($search) {
								$author->where('name', 'like', '%' . $search . '%');
							}
						);
					}
				);
		}
		
		if(filled(request('tags'))){
			$news = $news->whereHas('tags', function($query){
				$query->where('news_tags.id', request('tags'));
			});
		}
		
		return $news;
	}
	
	public function getUrl()
	{
		return route('pages.news.show', [$this->id, $this->slug]);
	}
	
	
}
