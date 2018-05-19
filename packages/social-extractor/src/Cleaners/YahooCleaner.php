<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/24/18
 * Time: 7:59 AM
 */

namespace LzoMedia\SocialExtractor\Cleaners;


/*
 *
 */
use LzoMedia\SocialExtractor\Interfaces\CleanerManager;
use LzoMedia\SocialExtractor\Interfaces\ClientManager;
use LzoMedia\SocialExtractor\Models\Group;

class YahooCleaner implements CleanerManager
{


    protected $type = 'Yahoo';

    protected $name;

    protected $description;

    protected $cover;

    public $results = [];



    /**
     * @method ClientManager
     * @param $client
     * @return $this
     */
    public function clean(ClientManager $client){

        $this->results = collect([]);

        $groups = $client->getResults();

        foreach ($groups as $key => $group){


            //$ai = new DandelionApi();

            $model = new Group();

            $model->setName($this->setName($group->name));

            $model->setSlug($this->setSlug($group->name));

            $model->setDescription($this->setDescription($group->desc));


            if(property_exists($group, 'photoUrl')){

                $this->setCover($group->photoUrl);

            }

            $model->setId($group->groupId);

            $model->setType($this->type);

            $model->setCover($this->cover);

            $this->results->push($model);

        }


        return $this->results->all();

    }


    /**
     * @return $this
     */
    public function raw()
    {
        return $this;
    }


    /**
     * @method setName
     * @param mixed $name
     */
    public function setName($name)
    {
        $name = ucwords(strtolower($name));

        $this->name = str_replace('_',' ',$name);

        $this->name = strip_tags($this->name);

        return $this->name;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
       return  $this->slug = str_slug($this->name);
    }

    /**
     * @param null $cover
     */
    public function setCover($cover = null)
    {

        if(!is_null($cover)){

            $this->cover = $cover;

        }else{

            $this->cover = false;

        }

        return $this->cover;
    }


    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = strip_tags($description);

        return $this->description;
    }



}