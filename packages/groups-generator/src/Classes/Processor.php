<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 06.06.2018
 * Time: 21:32
 */

namespace LzoMedia\GroupsGenerator\Classes;


use LzoMedia\GroupsGenerator\Interfaces\ManagerInterface;
use LzoMedia\GroupsGenerator\Interfaces\ProcessorInterface;

class Processor implements ManagerInterface, ProcessorInterface
{

    protected $manager;

    
    public function getManager(Manager $manager)
    {
        $this->manager = $manager;
    }


    public function setManager(Manager $manager)
    {
        $this->manager = $manager;
    }


    public function start()
    {

        return $this->manager->start();

    }


}