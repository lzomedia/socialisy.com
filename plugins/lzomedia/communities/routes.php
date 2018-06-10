<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


//Setup route example
Route::get('/robot/{key?}',  array('as' => 'robot.start', function($key = null)
{

    switch ($key){
        case 'start':
            Artisan::call('communities:generate');
        break;
        case 'revert':
            echo 'I should clean';
        break;
        case 'delete':
            echo 'I should delete all the results';
        break;
    }



}));

//@method onGetCommunities
Route::get('/api/onGetCommunities', function () {


    $communities =  new \LzoMedia\Communities\Components\Communities();

    $data['groups'] = $communities->initRepository(24);

    return $data['groups'];

});