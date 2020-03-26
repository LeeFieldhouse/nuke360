<?php

namespace App\Modules\Teams;

use App\Traits\ImageAttributeTrait;
use App\Traits\ImageWithThumbResizeTrait;
use App\Traits\SortableModelTrait;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
	use SortableModelTrait;
	use ImageWithThumbResizeTrait;
	use ImageAttributeTrait;
	
	protected $guarded = [];
	
	protected static function boot()
	{
		parent::boot(); // TODO: Change the autogenerated stub
		static::addGlobalScope(
			'ordered', function ($query) {
			$query->orderBy('sort_order');
		});
	}
	
	
	public function socialLinks()
	{
		return $this->hasMany(TeamMemberSocialLink::class);
	}
	
	public function getImageAttribute($value)
	{
		return $this->getImage($value);
	}
	
	public function getImageThumbAttribute($value)
	{
		return $this->getImageThumb($value);
	}
	
	public function setImageAttribute($value)
	{
		//		if(app()->runningInConsole()){
		//			$this->attributes['image'] = $value;
		//			return;
		//		}
		$this->resizeImageWithThumb('image', $value, 'team/team_members', 800, 347);
	}
}