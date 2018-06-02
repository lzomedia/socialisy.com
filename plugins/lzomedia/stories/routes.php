<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 02.06.2018
 * Time: 01:44
 */




\Route::get('/api/onGetStories', function () {


    $groups = new \LzoMedia\Stories\Components\DisplayStories();



    return $groups->onGetStories();


});

