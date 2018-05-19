<?php

namespace LzoMedia\SocialExtractor\Classes;

use LzoMedia\SocialExtractor\Models\Group;

/**
 * Class Cleaner
 * @package LzoMedia\SocialExtractor\Classes
 */
class Cleaner {

    protected $id;

    protected $name;

    protected $slug;

    protected $description;

    protected $cover;


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = strip_tags($description);
    }


    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }


    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }


    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = strip_tags($name);
    }


    /**
     * @param mixed $cover
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }
}