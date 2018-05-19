<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/24/18
 * Time: 5:56 AM
 */


namespace LzoMedia\SocialExtractor\Interfaces;

/**
 * Interface Token
 * @package LzoMedia\SocialExtractor\Interfaces
 */

interface Token{

    /**
     * @method setToken
     * @param string $token
     * @return mixed
     */
    public function setToken($token);

    public function getToken();

}