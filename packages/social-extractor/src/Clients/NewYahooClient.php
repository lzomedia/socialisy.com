<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/25/18
 * Time: 5:47 PM
 */

namespace LzoMedia\SocialExtractor\Clients;


use LzoMedia\SocialExtractor\Interfaces\CleanerInterface;
use LzoMedia\SocialExtractor\Interfaces\ExtractorInterface;

class NewYahooClient implements ExtractorInterface,CleanerInterface
{


    private $url = 'https://groups.yahoo.com/api/v1/search/groups';

    private $limit = 100;

    private $offset = 20;

    public $results = [];


    /**
     * @method
     */
    public function extract()
    {
        return '//TODO: Implement extract() method.';
    }


    /**
     *
     */
    public function clean()
    {

        $this->extract();
        // TODO: Implement clean() method.
    }



}