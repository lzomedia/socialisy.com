<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/25/18
 * Time: 11:40 AM
 */

namespace LzoMedia\SocialExtractor\Parsers;


use LzoMedia\SocialExtractor\Interfaces\UrlGenerator;

use Illuminate\Support\Facades\Log;

use GuzzleHttp\Promise as GuzzlePromise;

class FacebookParser
{

    private $urls;

    function __construct()
    {

    }

    /**
     * @method extract
     * @return array
     */
    public function extract()
    {

        $promises = collect([]);

        foreach ($this->urls as $group => $url) {

            foreach ($url as $key => $p) {

                $promises->push(
                    [
                        'group' => $group,
                        'type' => $key,
                        'url' => $p,
                    ]
                );


            }

        }

        $results = [];

        foreach ($this->urls as $groupID => $group ){

            $links = $promises->where('group', $groupID)->all();



            $response = $this->process($links);

            $results[$groupID] = $response->all();

        }

        return $results;

    }


    /**
     *
     * @method process
     * @param array $promisesArray
     */
    private function process(array $promisesArray)
    {

        $responseData = collect([]);

        foreach ($promisesArray as $promises){

            $type = $promises['type'];
            $group = $promises['group'];
            $url = $promises['url'];

            $results = GuzzlePromise\settle($url)->wait();

            //dd($results);

            foreach ($results as $domain => $result) {

                if ($result['state'] === 'fulfilled') {

                    $response = $result['value'];

                    if ($response->getStatusCode() == 200) {

                        $data = json_decode($response->getBody());


                        $responseData->push([
                            'group' => $group,
                            'type' => $type,
                            'data' => $data
                        ]);

                    }

                }
                else if ($result['state'] === 'rejected') {

                    Log::warning('The promise has been rejected '.json_encode($result));

                } else {

                    Log::warning('The promise has failed'.json_encode($result));

                }


            }

        }


        return $responseData;


    }


    /**
     * @method setUrls
     * @param mixed $urlGenerator
     */
    public function setUrls(UrlGenerator $urlGenerator)
    {
        $this->urls = $urlGenerator->urls;
    }


}