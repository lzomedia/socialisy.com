<?php



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



\Route::get('/multi', function () {




    $client = new GuzzleClient(['timeout' => 12.0]); // see how i set a timeout

    $requestPromises = [];

    /// this should be a class
    $sitesArray = [

        [
            'domain' => 'laravelquestions.com',
            'url' => 'https://laravelquestions.com'
        ],


        [
            'domain' => 'mysqlquestions.com',
            'url' => 'https://mysqquestions.com'
        ],

    ];

    foreach($sitesArray as $site)
    {
        $requestPromises[$site['domain']] = $client->getAsync($site['url']);
    }

    $results = GuzzlePromise\settle($requestPromises)->wait();

    foreach($results as $domain => $result)
    {
        $site = @$sitesArray[$domain];

        //$this->logger->info('Crawler FetchHomePages: domain check ' . $domain);

        if($result['state'] === 'fulfilled')
        {
            $response = $result['value'];
            if($response->getStatusCode() == 200)
            {
                dd($response->getBody());

                $site->setHtml( $response->getBody() );
            }
            else{
                $site->setHtml( $response->getStatusCode() );
            }
        }
        else if($result['state'] === 'rejected'){ // notice that if call fails guzzle returns is as state rejected with a reason.

            $site->setHtml('ERR: ' . $result['reason'] );
        }
        else{
            $site->setHtml('ERR: unknown exception ' );
            $this->logger->err('Crawler FetchHomePages: unknown fetch fail domain: ' . $domain  );
        }

        $this->entityManager->persist($site); // this is a call to Doctrines entity manager
    }

    return json_encode($results);
});





\Route::get('/api/onGetGroups', function () {


    $groups = new \LzoMedia\Groups\Components\Groups();

    return $groups->onGetGroups();


});



