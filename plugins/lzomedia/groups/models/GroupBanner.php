<?php namespace LzoMedia\Groups\Models;

use Model;

/**
 * GroupBanners Model
 */
class GroupBanner extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'group_banners';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [

    ];


    public $hasMany = [];
    public $belongsTo = [
        'group' => '\LzoMedia\Group\Models\Group',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];

    public $attachOne = [

        'picture' => 'System\Models\File'

    ];

    public $attachMany = [];
}
