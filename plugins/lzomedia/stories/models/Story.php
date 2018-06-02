<?php

namespace LzoMedia\Groups\Models;


use Illuminate\Database\Eloquent\Model;
use LzoMedia\Groups\Traits\Likes;
use LzoMedia\Groups\Traits\Reporting;
use RainLab\User\Models\User;

class Story extends Model
{
    use Likes;

    use Reporting;

	protected $table = 'group_stories';

    protected $fillable = ['title', 'user_id', 'body', 'type', 'extra_info', 'group_id'];


	public function group()
	{
		return $this->belongsTo(Group::class, 'group_id');
	}


	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id')->with('commentator');
    }


}
