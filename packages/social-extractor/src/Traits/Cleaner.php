<?php

namespace LzoMedia\SocialExtractor\Traits;


use Carbon\Carbon;

/**
 * Trait Cleaner
 * @package LzoMedia\SocialExtractor\Traits
 */
trait Cleaner {


    /**
     * @method setName
     * @param string $name
     * @return string
     */
    public function setName(string $name):string
    {
        $name = ucwords(strtolower($name));

        $name = str_replace('_',' ',$name);

        $name = strip_tags($name);

        return $name;
    }



    /**
     * @method setSlug
     * @param string $slug
     * @return string
     */
    public function setSlug(string $slug):string
    {
        $slug = str_slug($slug);

        return $slug;
    }



    /**
     * @method setDescription
     * @param $description
     * @return @mixed
     */
    public function setDescription(string $description)
    {

        if(is_null($description)){

            $description = false;

        }else{

            $description = str_replace(PHP_EOL, null, strip_tags($description));

        }


        return $description;
    }


    /** setPrivacy
     * @method
     * @param $privacy
     * @return int
     */
    public function setPrivacy(string $privacy)
    {

        switch ($privacy){

            case 'OPEN':
                $privacy = 0;
                break;

            case 'CLOSED':
                $privacy = 1;
                break;

        }

        return $privacy;

    }



    /**
     * @method setCover
     * @param mixed $cover
     * @return mixed
     */
    public function setCover($cover)
    {

        if(is_object($cover)){

            return $cover->source ;

        }else{

            return $cover;
        }



    }


    /**
     * @method setEmail
     * @param mixed $email
     * @return mixed
     */
    public function setEmail($email)
    {
        return $email;
    }


    /**
     * @method setTime
     * @param $time
     * @return mixed
     */
    public function setTime($time)
    {

        if (is_int($time)) {

            $time = date('Y-m-d H:s', $time);


            $newYear = new Carbon($time);

            $newYear = $newYear->toDateTimeString();


            return $newYear;



        } else {

            $time = str_replace('T', ' ', $time);

            $time = str_replace('+0000', ' ', $time);

            $newYear = new Carbon($time);

            $newYear = $newYear->toDateTimeString();


            return $newYear;
        }

    }



}