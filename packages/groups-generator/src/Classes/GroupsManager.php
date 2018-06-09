<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 06.06.2018
 * Time: 21:31
 */

namespace LzoMedia\GroupsGenerator\Classes;


class GroupsManager extends Manager
{

    public $groups = [];


    private $extractor;



    public function __construct(Extractor $extractor)
    {
        $this->groups = collect([]);

        $this->extractor = $extractor;
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


    public function start()
    {
        return $this->extractor->get();
    }





}