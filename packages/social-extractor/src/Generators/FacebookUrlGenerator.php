<?php


namespace LzoMedia\SocialExtractor\Generators;

//from package
use LzoMedia\SocialExtractor\Clients\NewFacebookClient;
use LzoMedia\SocialExtractor\Interfaces\UrlGenerator;


//dependencies
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;


class FacebookUrlGenerator extends NewFacebookClient implements UrlGenerator
{

    public $urls;


    /**
     * FacebookUrlGenerator constructor.
     * @param $groups int | array
     */
    public function __construct($groups)
    {

        $this->urls = collect([]);

        $this->groups = $groups;

        $this->generate();

    }


    /**
     * @method generate
     * @description Generates an array of guzzle promises for the facebook parser
     */
    public function generate()
    {

        $response = is_array($this->groups);

        if ($response == false) {

            $groups[] = $this->groups;

            $this->groups = $groups;

        }

        $client = new Client(['timeout' => 12.0]);// see how i set a timeout

        $endpoints = collect([]);

        foreach ($this->groups as $group) {

            $endpoints->push(

                [
                    'group' => $group . '-key-',
                    'info' => $this->url . $group . $this->infoEndpoint,
                    'feed' => $this->url . $group . $this->feedEndpoint,
                    'members' => $this->url . $group . $this->membersEndpoint,
                    'events' => $this->url . $group . $this->eventsEndpoint,
                    'videos' => $this->url . $group . $this->videosEndpoint,
                ]

            );


        }

        dd($endpoints);

        $endpoints = ($endpoints->flatten());
        $requestPromises = [];
        $group = '';
        foreach ($endpoints as $endpoint) {


            if (strpos($endpoint, '-key-') !== false) {


                $group = str_replace('-key-', '', $endpoint);

                $group = intval($group);


            }

            if (strpos($endpoint, 'info') !== false) {


                $infoUrl = str_replace('info', '', $endpoint);


                $requestPromises[$group]['info'] = $client->getAsync(
                    $infoUrl,
                    [
                        'query' => [
                            'access_token' => $this->token,
                            'fields' => $this->fields['info'],
                            'limit' => $this->limit,
                        ]
                    ]
                );
            }

            if (strpos($endpoint, 'feed') !== false) {

                $requestPromises[$group]['feed'] = $client->getAsync(
                    $endpoint,
                    [
                        'query' => [
                            'access_token' => $this->token,
                            'fields' => $this->fields['feed'],
                            'limit' => $this->limit,
                        ]
                    ]
                );
            }

            if (strpos($endpoint, 'members') !== false) {

                $requestPromises[$group]['members'] = $client->getAsync(
                    $endpoint,
                    [
                        'query' => [
                            'access_token' => $this->token,
                            'fields' => $this->fields['members'],
                            'limit' => $this->limit,
                        ]
                    ]
                );
            }


            if (strpos($endpoint, 'events') !== false) {

                $requestPromises[$group]['events'] = $client->getAsync(
                    $endpoint,
                    [
                        'query' => [
                            'access_token' => $this->token,
                            'fields' => $this->fields['events'],
                            'limit' => $this->limit,
                        ]
                    ]
                );
            }

            if (strpos($endpoint, 'videos') !== false) {

                $requestPromises[$group]['videos'] = $client->getAsync(
                    $endpoint,
                    [
                        'query' => [
                            'access_token' => $this->token,
                            'fields' => $this->fields['videos'],
                            'limit' => $this->limit,
                        ]
                    ]
                );
            }

        }
        $results = collect($requestPromises);

        $this->urls = $results;



        if(count($this->urls) == 0){

            $this->urls = FALSE;


        }

        return ($results->all());


    }


}