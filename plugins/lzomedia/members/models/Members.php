<?php namespace LzoMedia\Members\Models;

use Model;

/**
 * Members Model
 */
class Members extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'users';

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
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];


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
