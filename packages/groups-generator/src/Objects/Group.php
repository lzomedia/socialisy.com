<?php
namespace LzoMedia\GroupsGenerator\Objects;
/**
 * Created by PhpStorm.
 * User: lzo
 * Date: 12/04/17
 * Time: 21:52
 */
class Group
{

    public $name;

    public $description;

    public $image = false;

    public $feed;

    public $members;

    public $group_id;

    public $privacy;

    public $type;



    /**
     * Group constructor.
     */
    public function __construct()
    {
        return $this;
    }

    /**
     * @method setType
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @method getType
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @method getPrivacy
     * @return mixed
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }


    /**
     * @method setPrivacy
     * @param mixed $privacy
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }


    /**
     * @method getGroupId
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->group_id;
    }


    /**
     * @method setGroupId
     * @param mixed $group_id
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;

        return $this;
    }



    /**
     * @method getImage
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @method setImage
     * @param mixed $image
     */
    public function setImage($image)
    {

        if($image == null) {

            $this->image = false;
        }

        $this->image = $image;


    }

    /**
     * @method setDescription
     * @param mixed $description
     */
    public function setDescription($description)
    {

        $this->description = strip_tags($description);

        return $this;
    }

    /**
     * @method setName
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    /**
     * @method getDescription
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @method getFeed
     * @return mixed
     */
    public function getFeed()
    {
        return $this->feed;
    }


    /**
     * @method getMembers
     * @return mixed
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @method getName
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



}