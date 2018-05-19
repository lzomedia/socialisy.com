<?php

namespace LzoMedia\Groups\Traits;

use LzoMedia\Groups\Models\Like;

trait Likes
{
    /**
     * @method like
     * @param $user_id
     */
    public function like($user_id)
    {
        $like = new Like(['user_id' => $user_id]);

        $this->likes()->save($like);
    }

    /**
     * method unlike
     * @param $user_id
     */
    public function unlike($user_id)
    {
        $this->likes()->where('user_id', $user_id)->delete();
    }

    /**
     * @method toggleLike
     * @param $user_id
     */
    public function toggleLike($user_id)
    {
        if ($this->isLiked($user_id)) {
            return $this->unlike($user_id);
        }

        $this->like($user_id);
    }

    /**
     * method @isLiked
     * @param $user_id
     * @return bool
     */
    public function isLiked($user_id)
    {
        return !!$this->likes()
            ->where('user_id', $user_id)
            ->count();
    }


    /**
     * @method getLikesCountAttribute
     * @return mixed
     */
    public function getLikesCountAttribute()
    {
        return $this->likes()->count();
    }
}
