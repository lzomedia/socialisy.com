<?php

namespace LzoMedia\Groups\Models;

use Eloquent;

class Profile extends Eloquent
{

    protected $fillable = ['user_id'];

    protected $table = 'user_profile';

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('User');
    }


}
