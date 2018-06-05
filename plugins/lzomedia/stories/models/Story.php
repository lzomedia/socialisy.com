<?php

namespace LzoMedia\Stories\Models;


use Illuminate\Database\Eloquent\Model;
use LzoMedia\Groups\Traits\Likes;
use LzoMedia\Groups\Traits\Reporting;
use RainLab\User\Models\User;

use LzoMedia\Groups\Models\Group;

use LzoMedia\Groups\Models\Comment;

use Carbon\Carbon;



class Story extends Model
{
    use Likes;

    use Reporting;

	protected $table = 'group_stories';

    protected $fillable = ['title', 'user_id', 'body', 'type', 'image', 'group_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function group()
	{
		return $this->belongsTo(Group::class, 'group_id');
	}


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id')->with('commentator');
    }

    /**
     * @param $value
     */
    public function setDateOfCreatedAttribute($value)
    {
        //dd($value);
        $this->attributes['created_at'] = Carbon::createFromFormat('d/m/Y',$value);
    }

}
