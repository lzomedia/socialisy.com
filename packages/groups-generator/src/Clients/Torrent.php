<?php

namespace LzoMedia\GroupsGenerator\Clients;


use LzoMedia\Groups\Models\Group;
use LzoMedia\GroupsGenerator\Interfaces\ExtractorInterface;

use LzoMedia\GroupsGenerator\Classes\Extractor;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client;
use LzoMedia\Communities\Models\Community;
use RainLab\User\Models\User;

use RainLab\User\Facades\Auth;

class Torrent extends Extractor implements ExtractorInterface {


    /**
     * @return mixed|void
     */
    public function get()
    {


        $guzzle = new Client();

        $response = $guzzle->request('GET', 'https://www.olx.ro/i2/servicii-afaceri-colaborari/?json=1&search&category_id=658&view=list&&q=')->getBody();

        $response = \GuzzleHttp\json_decode($response);


        foreach ($response->ads as $ad){


            $community = new Community();

            $community->name = $ad->title;

            $community->description = $ad->description;

            $community->url = str_slug($ad->city_label).'-' . str_slug($ad->title);

            $user  = User::findByEmail(str_slug($ad->person). '@socialtrixie.com');

            if(is_null($user)){


                $user = Auth::register([
                    'name' => $ad->person,
                    'email' => str_slug($ad->person). '@socialtrixie.com',
                    'password' => 'changeme',
                    'password_confirmation' => 'changeme',
                ]);

                $community->user()->associate($user);

                }


            $community->save();




        }



        return ('we finished extracting from olx');


    }


}