<?php

namespace LzoMedia\GroupsGenerator\Interfaces;
use LzoMedia\GroupsGenerator\Classes\Manager;

/**
 * Interface ManagerInterface
 * @package LzoMedia\GroupsGenerator\Interfaces
 */
interface ManagerInterface {


    function setManager(Manager $manager);

    function getManager(Manager $manager);


}