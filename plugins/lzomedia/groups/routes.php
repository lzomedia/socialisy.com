<?php

require_once 'api.php';

use LzoMedia\GroupsExtractor\Social\Yahoo\YahooApp;
use LzoMedia\GroupsExtractor\Social\Yahoo\Extractors\YahooGroupExtractor;


Route::get('/yahoo/', function (){

    //client
    $client = new Managers\ClientManager();

    //start the Yahoo
    $socialType = new YahooApp();

    //Type of extractor
    $typeOfDataToExtract = new YahooGroupExtractor();

    //extractor type should be a interface up
    $socialType->setExtractorType($typeOfDataToExtract);

    // set socialType
    $client->setSocialType($socialType);

    $groups  = ($client->process());

    return $groups;


});