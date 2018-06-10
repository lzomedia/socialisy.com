<?php

namespace LzoMedia\Communities\Models;

use Model;

use RainLab\User\Models\User;

use System\Models\File;
use Intervention\Image\ImageManagerStatic as Image;


class Stories extends Model
{


    protected $table = 'stories';


    protected $fillable = [
        'group_id',
        'title',
        'title',
        'message',
        'type',
        'user_id',
        'image',

    ];


    public function user()
    {
        return $this->belongsTo('RainLab\User\Models\User');
    }


}