<?php

namespace LzoMedia\Groups\Models;

use Eloquent;
use LzoMedia\Groups\Traits\Likes;
use LzoMedia\Groups\Traits\Reporting;
use RainLab\User\Models\User;

class Comment extends Eloquent
{
    use Likes;
    use Reporting;

    protected $fillable = ['post_id', 'user_id', 'body'];

    public function commentator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }



    /**
     * Adds a comment
     *
     * @param      array  $comment
     *
     * @return     Comment
     */
    public function add($comment)
    {
        return $this->create($comment);
    }
}
