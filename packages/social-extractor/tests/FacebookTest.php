<?php

use PHPUnit\Framework\TestCase;


use LzoMedia\SocialExtractor\Clients\NewFacebookClient as FBClient;
use LzoMedia\SocialExtractor\Generators\FacebookUrlGenerator as UrlGenerator;


class FacebookTest extends TestCase
{

    protected $client;

    public function setUp()
    {

        $token = 'EAACEdEose0cBAL4l6sUfJEjng5wSmHuQGTFKRcZBzNqRZCskajD1giUcDQXijuALCOFEUOV2NARpRlbuTWKBZCiGQephJVwdAb2jWFZAOEKZAbed9CFRAT40XQ0IDYoWT5bwcg9L85CLCVJiIncxdgUVrd4ZBJ2mh5WWhSr8bIMTIn1BLVkB7o8AUZBZBuFJgTpzGscgB76NeQZDZD';

        $this->client = new FBClient();

        $this->client->setToken($token);

        $this->client->setGroups(123456);

        $this->assertNotEmpty($this->client->token);
        $this->assertNotEmpty($this->client->groups);
    }





    public function testFacebookUrlGenerator()
    {


        $urls = new UrlGenerator($this->client->groups);

        $urls->setToken($this->client->token);

        $urls->generate();

        $this->assertNotFalse($urls->generate());



    }




}
