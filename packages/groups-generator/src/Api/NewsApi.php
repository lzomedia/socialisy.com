<?php


/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 10.05.2018
 * Time: 13:42
 */



namespace LzoMedia\GroupGenerator;

/**
 * Class NewsApi
 * @package LzoMedia\GroupGenerator
 */
class NewsApi
{

    private $apiKey = '';


    private $url = 'https://newsapi.org/v2/top-headlines?country=ro&apiKey=d27f06313bfb4654b7b88b2e3250fc70';

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }


    public function __construct()
    {
        
    }




}