<?php

namespace LzoMedia\SocialExtractor\Generators;

use LzoMedia\SocialExtractor\Clients\NewYahooClient;
use LzoMedia\SocialExtractor\Clients\YahooClient;
use LzoMedia\SocialExtractor\Interfaces\UrlGenerator;
use GuzzleHttp\Client;

/**
 * Class YahooUrlGenerator
 * @package LzoMedia\SocialExtractor\Generators
 */
class YahooUrlGenerator extends NewYahooClient implements UrlGenerator
{

    public function generate()
    {
        // TODO: Implement generate() method.

        try{

            $client = new Client(['timeout' => 12.0]); // see how i set a timeout

            $requestPromises = [];

            $sitesArray = [];

            for($i=0; $i< $this->limit; $i++){


                if($i % $this->offset == 0){


                    $sitesArray[] = [
                        'domain' => 'yahoo.com',
                        'url' => $this->url,
                        'offset' => $i
                    ];

                }

            }


            foreach($sitesArray as $key => $site)
            {
                $requestPromises[$key] = $client->getAsync(
                    $site['url'],
                    [
                        'query' => [
                            'offset' => $site['offset'],
                            'maxHits' => 20,
                            'sortBy'=> '',
                            'query'=> '',
                        ]
                    ]
                );
            }

            return $requestPromises;


        }catch (\Exception $exception){

        }
    }

}

