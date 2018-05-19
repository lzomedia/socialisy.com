<?php

namespace LzoMedia\GroupGenerator;



use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Promise as GuzzlePromise;
use phpDocumentor\Reflection\Types\Integer;
use Sunra\PhpSimple\HtmlDomParser;




class GroupGenerator{

    public $results = [];

    public $client;

    public $posts;


    private $url = 'https://mbasic.facebook.com/groups/';

    private $urlMobile = 'https://m.facebook.com/groups/';

    private $group;

    public function __construct($group_id)
    {

        $this->posts = collect([]);

        $this->group = $group_id;
        
    }


    /**
     *
     */
    public function get()
    {

        $client = new GuzzleClient(['timeout' => 12.0]); // see how i set a timeout


        $response = $client->request('GET', $this->url . $this->group,
            [
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/53',
                ]
            ]
        );

        $data = (string)$response->getBody();

        echo($data);

        $dom = HtmlDomParser::str_get_html( $data );


        foreach($dom->find('div.bj') as $article) {


            if(count($article->find('div', 2)) > 0 ){

                $item['content']     = $article->find('div > table.p', 0)->innertext();

            }

            $this->posts->push($item);
        }

        $items = ($this->posts);



    }


}