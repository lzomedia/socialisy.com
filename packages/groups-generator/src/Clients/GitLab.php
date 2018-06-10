<?php

namespace LzoMedia\GroupsGenerator\Clients;


use LzoMedia\Groups\Models\Group;
use LzoMedia\GroupsGenerator\Interfaces\ExtractorInterface;

use LzoMedia\GroupsGenerator\Classes\Extractor;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client;
use LzoMedia\Communities\Models\Community;

class GitLab extends Extractor implements ExtractorInterface {


    /**
     * @return mixed|void
     */
    public function get()
    {


        $guzzle = new Client();

        $response = $guzzle->request('GET', 'https://gitlab.com/explore/groups.json?page=1')->getBody();

        $response = \GuzzleHttp\json_decode($response);


        foreach ($response as $ad){


            $community = new Community();

            $community->name = $ad->name;

            $community->description = $ad->description;


            $community->url = str_slug($ad->relative_path);


            $community->save();




        }


        return "records have been saved master";

    }


}