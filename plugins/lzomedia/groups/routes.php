<?php

require_once 'api.php';


use LzoMedia\Groups\Models\Group;
use LzoMedia\GroupGenerator\GroupGenerator;


\Route::get('/test', function () {

    $multi = [
        '672092929556283',
        '795110130605085',
        '529456420556801',
        '735758176536843',
        '430161893812721',
        '1056319347746170'
    ];


    $ar = array_random($multi);

    $facebook = new GroupGenerator($ar);

    echo ($facebook->get());


});
\Route::get('/single/{token}', function ($token) {

    $multi = [
        '672092929556283',
        '150804474975278',
        '795110130605085',
    ];


//    $yahoo = new \LzoMedia\SocialExtractor\Clients\NewYahooClient();
//
    $ar = array_random($multi);

    $facebook = new \LzoMedia\SocialExtractor\Clients\NewFacebookClient();

    $facebook->setGroups($ar);

    $facebook->setToken($token);

    dd (

        $facebook->clean()

    );

});

