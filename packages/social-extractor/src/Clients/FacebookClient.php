<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/24/18
 * Time: 5:19 AM
 */


namespace LzoMedia\SocialExtractor\Clients;


use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Promise as GuzzlePromise;


use LzoMedia\SocialExtractor\Interfaces\Token;


use Illuminate\Support\Facades\Log;

use LzoMedia\SocialExtractor\Ai\DandelionApi;


class FacebookClient implements Token
{

    protected $token;

    protected $endpoint;

    protected $limit = 100;

    protected $fields       = 'id,name,description,cover,member_request_count,parent,venue,purpose,email,events,posts,members,privacy';

    protected $postFields   = 'message,full_picture,source,type,link,description,name,status_type,likes{name,profile_type,pic_large},comments{message,from,comment_count}';

    protected $url = 'https://graph.facebook.com/v2.10/';

    public $results = [];

    public function __construct()
    {


    }


    public function getToken()
    {

        return $this->token;

    }

    /**
     * @method setToken
     * @param string $token
     * @return mixed|void
     */
    public function setToken($token)
    {

        $this->token = $token;
    }


    /**
     * @method setEndpoint
     * @param $endpoint int | array
     * @return mixed | void
     */
    public function setEndpoint($endpoint)
    {

        $this->endpoint = $endpoint;
    }

    /**
     * @method start
     * @return $this
     */
    public function start()
    {

        $this->results = collect([]);

        $check = is_array($this->endpoint);

        switch ($check) {

            case 1:
                $this->multi();
                break;
            case 0:
                $this->simple();
                break;

            default:
                $this->simple();
                break;

        }

        return $this;

    }


    /**
     * @method simple
     * @description This proved an way to simple extract the data from facebook
     */
    private function simple()
    {

        try {

            $client = new GuzzleClient();

            $response = $client->request('GET', $this->url . $this->endpoint, [
                'query' => [
                    'limit' => $this->limit,
                    'fields' => $this->fields,
                    'access_token' => $this->getToken()
                ]
            ]);

            $data[0] = json_decode($response->getBody());


            $this->results->push($data);

            $this->setResults($data);

            return $this;

        } catch (\Exception $e) {

            echo('Error Code ' . $e->getCode() . '<br>');

            echo(json_encode($e->getMessage()));

        }


    }

    /**
     * @method multi
     * @description This proved an way to simple extract the data from facebook
     */
    private function multi()
    {


        try {


            $client = new GuzzleClient(['timeout' => 12.0]); // see how i set a timeout

            $requestPromises = [];

            $sitesArray = [];

            foreach ($this->endpoint as $endpoint) {


                $sitesArray[] = [
                    'domain' => 'facebook.com',
                    'url' => $this->url . $endpoint,

                ];

            }

            // dd($sitesArray);


            foreach ($sitesArray as $key => $site) {
                $requestPromises[$key] = $client->getAsync(
                    $site['url'],
                    [
                        'query' => [
                            'access_token' => $this->getToken(),
                            'fields' => $this->fields,
                            'limit' => $this->limit,
                        ]
                    ]
                );
            }

            $results = GuzzlePromise\settle($requestPromises)->wait();

            //fake array


            foreach ($results as $domain => $result) {


                if ($result['state'] === 'fulfilled') {

                    $response = $result['value'];

                    if ($response->getStatusCode() == 200) {


                        $data = json_decode($response->getBody());



                        $this->results->push($data);


                    }

                } // notice that if call fails guzzle returns is as state rejected with a reason.
                else if ($result['state'] === 'rejected') {

                    Log::warning(' Failed the status was rejected ' . json_encode($result));

                } else {

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
    public function getResults()
    {
        return $this->results;
    }


    /**
     * @param array $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * @todo test
     */
    public function getPosts()
    {

        $client = new GuzzleClient();


        $response = $client->request('GET', $this->url . $this->endpoint . '/feed/', [
            'query' => [
                'limit' => $this->limit,
                'fields' => $this->postFields,
                'access_token' => $this->getToken()
            ]
        ]);

        $data = json_decode($response->getBody());

        return collect($data->data);


    }

}