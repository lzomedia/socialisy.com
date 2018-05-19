<?php


/*
 *
 */
namespace LzoMedia\SocialExtractor\Models;
use LzoMedia\SocialExtractor\Traits\Cleaner;

/**
 * Class Group
 * @package LzoMedia\SocialExtractor\Models
 */
class Group  {

    use Cleaner;

    public $id;

    public $name;

    public $slug;

    public $description = false;

    public $cover;

    public $email = false;

    public $type;

    public $privacy = 0;

    public $user_id = 1;

    public $members = [];

    public $feeds = [];


    public function __construct()
    {
        $this->members = collect([]);
        $this->feeds   = collect([]);
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $cover
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param int $privacy
     */
    public function setPrivacy(int $privacy)
    {
        $this->privacy = $privacy;
    }


    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }


    /**
     * @param mixed null array $members
     */
    public function setMembers($members)
    {
        $this->members = $members;
    }


    /**
     * @return array|\Illuminate\Support\Collection|\October\Rain\Support\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param mixed null array $feeds
     */
    public function setFeeds($feeds)
    {
        $this->feeds = $feeds;
    }




}