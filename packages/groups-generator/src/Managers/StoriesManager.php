<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 06.06.2018
 * Time: 21:31
 */

namespace LzoMedia\GroupsGenerator\Managers;


use LzoMedia\GroupsGenerator\Classes\Manager;

use LzoMedia\GroupsGenerator\Classes\Extractor;


class StoriesManager extends Manager
{

    public $groups = [];


    private $extractor;



    public function __construct(Extractor $extractor)
    {
        $this->groups = collect([]);

        $this->extractor= ($extractor);
    }
    
    /**
     * @return array
     */
    public function getGroups(): array
    {
        return $this->groups;
    }


    
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }


    /**
     * @method start
     */
    public function start()
    {

        return $this->extractor->get();


    }





}