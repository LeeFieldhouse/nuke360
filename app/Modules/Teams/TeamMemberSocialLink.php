<?php

namespace App\Modules\Teams;

use Illuminate\Database\Eloquent\Model;

class TeamMemberSocialLink extends Model
{
    protected $guarded = [];
    
    public function teamMember(){
    	return $this->belongsTo(TeamMember::class);
	}
    
}
