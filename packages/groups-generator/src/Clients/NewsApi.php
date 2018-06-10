<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 10.06.2018
 * Time: 12:54
 */

namespace LzoMedia\GroupsGenerator\Clients;


use LzoMedia\GroupsGenerator\Classes\Extractor;
use LzoMedia\GroupsGenerator\Interfaces\ProcessorInterface;

class NewsApi extends Extractor implements ProcessorInterface
{


    protected $url = "https://newsapi.org/v2/top-headlines?language=en&pageSize=75&apiKey=d27f06313bfb4654b7b88b2e3250fc70";


    protected $stories;


    public function __construct()
    {


        $this->stories = collect([]);

    }

    public function start()
    {
        // TODO: Implement start() method.
    }

    
}