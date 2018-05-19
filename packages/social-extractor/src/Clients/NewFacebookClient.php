<?php

namespace LzoMedia\SocialExtractor\Clients;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use LzoMedia\SocialExtractor\Cleaners\FacebookCleaner;
use LzoMedia\SocialExtractor\Generators\FacebookUrlGenerator;
use LzoMedia\SocialExtractor\Parsers\FacebookParser;

//interfaces
use LzoMedia\SocialExtractor\Interfaces\CleanerInterface;
use LzoMedia\SocialExtractor\Interfaces\ExtractorInterface;
use LzoMedia\SocialExtractor\Interfaces\Token;
use PHPUnit\Runner\Exception;

class NewFacebookClient implements Token, ExtractorInterface, CleanerInterface
{


    public $token;

    public $client;

    public $url = 'http://graph.facebook.com/v2.9/';

    public $endpoint;

    public $limit = 100;

    public $infoEndpoint = '/info';

    public $membersEndpoint = '/members';

    public $feedEndpoint = '/feed';

    public $eventsEndpoint = '/events';

    public $videosEndpoint = '/videos';

    public $groups;

    public $fields = [

        'info' => 'id,name,description,cover,purpose,email,privacy,created_time',
        'feed' => 'message,full_picture,source,type,link,description,name,likes{name,profile_type,pic_large},comments{message,from,comment_count},created_time,from{id,name,cover}',
        'members' => 'name,cover,administrator,joined',
        'videos' => 'source,description,created_time',
        'events' => 'name,cover,description,attending_count,category,end_time,created_time'

    ];


    /**
     * NewFacebookClient constructor.
     *
     */
    public function __construct()
    {

    }


    /**
     * @method getToken
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @method setToken
     * @description Check's if a token is set and is a valid one
     * @param string $token
     * @return string|null
     */
    public function setToken($token)
    {

        $this->token = null;

        $client = new Client();





        $response = $client->request('GET', $this->url . '/me', [
            'query' => ['access_token' => $token]
        ]);





        if($response->getStatusCode() == 200 ){

            $this->token = $token;

        }

        $this->token = $token;


    }


    /**
     * @method extract
     * @return array
     */
    public function extract()
    {

        //todo clean this and implement a better way
        $urls = new FacebookUrlGenerator($this->groups);

        $urls->setToken($this->token);

        $urls->generate();

        $parser = new FacebookParser();

        $parser->setUrls($urls);

        return $parser->extract();


    }


    /**
     * @todo implement cleaner manager and pass this over
     */
    function clean(){


        $results = [];

        foreach ($this->extract() as $key => $result){

            $cleaner = new FacebookCleaner();

            $results[] = $cleaner->clean($result);

        }

        return $results;

    }

    /**
     * @method setGroups
     * @description Sets the groups array
     * @param $groups
     */
    public function setGroups($groups)
    {

        $this->groups = $groups;

    }


    /**
     * @return array|int
     */
    public function getGroups()
    {

        return $this->groups;
    }




}