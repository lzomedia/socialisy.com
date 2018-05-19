<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/24/18
 * Time: 5:19 AM
 */


namespace LzoMedia\SocialExtractor\Clients;

use Illuminate\Support\Facades\Log;


use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Promise as GuzzlePromise;


use LzoMedia\SocialExtractor\Ai\DandelionApi;

use LzoMedia\SocialExtractor\Interfaces\ClientManager;


class YahooClient implements ClientManager
{

    protected $url = 'https://groups.yahoo.com/api/v1/search/groups';

    protected $limit = 100;

    protected $offset = 20;

    public $results = [];



    /**
     * @return string
     */
    public function start()
    {

        $this->results = collect([]);


        try {


            $client = new GuzzleClient(['timeout' => 12.0]); // see how i set a timeout

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

            $results = GuzzlePromise\settle($requestPromises)->wait();


            foreach($results as $domain => $result)
            {


                if($result['state'] === 'fulfilled')
                {
                    $response = $result['value'];

                    if($response->getStatusCode() == 200)
                    {


                        $data = json_decode($response->getBody());

                        $this->results->push($data->ygData->groups);


                    }

                }

                // notice that if call fails guzzle returns is as state rejected with a reason.
                else if($result['state'] === 'rejected'){

                    Log::warning(json_encode($result));
                }

                else{

                    Log::critical(json_encode($result));

                }


            }

            $this->results = $this->results->flatten();


            $this->results = ($this->results->all());

            $this->setResults($this->results);

            return $this;


        } catch (\Exception $e) {

            return $e->getMessage();

        }

    }


    /**
     * @return array
     */
    public function getResults(): array
    {
        return $this->results;
    }


    /**
     * @param array $results
     */
    public function setResults(array $results)
    {
        $this->results = $results;
    }


}