<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/24/18
 * Time: 9:12 AM
 */

namespace LzoMedia\SocialExtractor\Ai;


use GuzzleHttp\Client;

use LzoMedia\SocialExtractor\Interfaces\AiInterface;

/**
 * Class DandelionApi
 * @package LzoMedia\SocialExtractor\Ai
 */
class DandelionApi implements AiInterface
{


    protected $key = '8e6e3cb4cb9242fbaf300067a7738e1a';

    protected $model = '54cf2e1c-e48a-4c14-bb96-31dc11f84eac';

    protected $url = 'https://api.dandelion.eu/datatxt/cl/v1/';




    /**
     * @method setKey
     * @param string $key
     */
    public function setKey(string $key)
    {
        $this->key = $key;
    }

    /**
     * @method getKey
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }



    /**
     *
     * @method detect
     * @param $text string
     * @return string
     *
     *
     */
    public function classify(string $text)
    {

        $client = new Client();

        $response = $client->request('GET', $this->url, [
            'query' => [
                'text' => $text,
                'model' => $this->model,
                'token' => $this->key
            ]
        ]);

        return $response->getBody();

    }


    public function entities(string $text)
    {
        
    }


}