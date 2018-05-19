<?php

namespace LzoMedia\Groups\Models;

use Model;

use RainLab\User\Models\User;
use System\Models\File;
use Intervention\Image\ImageManagerStatic as Image;


class Group extends Model
{
    protected $fillable = [
        'name',
        'url',
        'type',
        'group_id',
        'user_id',
        'description',
        'short_description',
        'image',
        'private',
        'extra_info',
        'settings',
        'conversation_id',
    ];

	/**
	 * @return mixed
	 */
    public function scopeAdmin(){

	    return User::find($this->user_id);

    }


    public function posts()
    {
        return $this->hasMany(Post::class, 'group_id');
    }




    /**
     * @method banner
     * @return mixed
     */
    public function banner()
    {
        return $this->hasOne(GroupBanner::class, 'group_id');

    }




	/**
	 * @param $user_id
	 *
	 * @return bool
	 */
	public function scopeIsMember($user_id) {

        return true;

    }

    /**
     * Creates a group join request
     *
     * @param      integer  $user_id
     */
    public function request($user_id)
    {

        //@todo needs to check first if there is already one request

        $request = new GroupRequest(['user_id' => $user_id]);

        $this->requests()->save($request);
    }
	
	/**
	 * @param $user_id
	 */
    public function deleteRequest($user_id)
    {
        $this->requests()->where('user_id', $user_id)->delete();
    }

    /**
     * Accepts a group join request
     *
     * @param      integer  $user_id
     *
     * @return     Group
     */
    public function acceptRequest($user_id)
    {
        $this->addMembers($user_id);

        $this->deleteRequest($user_id);

        return $this;
    }

    /**
     * Decline a group join request
     *
     * @param      integer  $user_id
     *
     * @return     Group
     */
    public function declineRequest($user_id)
    {
        $this->deleteRequest($user_id);

        return $this;
    }

    /**
     * Add members / join group
     *
     * @param      mixed  $members  integer user_id or an array of user ids
     *
     * @return     Group
     */
    public function addMembers($members)
    {
        if (is_array($members)) {

            $this->users()->sync($members);

        } else {

            $this->users()->attach($members);

        }

        return $this;
    }

    /**
     * Removes user from group
     *
     * @param      mixed  $members  this can be user_id or an array of user ids
     *
     * @return     Group
     */
    public function leave($members)
    {
        if (is_array($members)) {
            foreach ($members as $id) {
                $this->users()->detach($id);
            }
        } else {
            $this->users()->detach($members);
        }

        return $this;
    }

    /**
     * Attach a post to a group
     *
     * @param      integer  $postId
     *
     * @return     Group
     */
    public function scopeAttachPost($postId)
    {
        if (is_array($postId)) {
            $this->posts()->sync($postId);
        } else {
            $this->posts()->add($postId);
        }

        return $this;
    }
    
    
    

    public function detachPost($postId)
    {
        $this->posts()->detach($postId);

        return $this;
    }





    /**
     * @method getDates
     * @description this provides an way to format data for json angularjs
     * @return array
     */
    public function getDates()
    {
        return [];
    }


    /**
     * @method getCreatedAtAttribute
     * @description this provides an way to format data for json angularjs
     * @return array
     */
    public function getCreatedAtAttribute($value)
    {

        $value = date('U', strtotime($value));

        return $value * 1000;
    }



    /**
     * @method getUpdatedAtAttribute
     * @description this provides an way to format data for json angularjs
     * @return array
     */
    public function getUpdatedAtAttribute($value)
    {
        $value = date('U', strtotime($value));

        return $value * 1000;

    }





}