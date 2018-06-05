<?php

namespace LzoMedia\Groups\Models;





use October\Rain\Database\Model;

class Member extends Model
{

    protected $fillable = ['user_id'];

    protected $table = 'users';

    protected $hidden = ['email', 'password'];

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('User');
    }


}
