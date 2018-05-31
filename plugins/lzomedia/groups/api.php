<?php


use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Promise as GuzzlePromise;





/**
 * test guzzle multiple requests
 *
 */


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

\Route::get('/api/getGroups', function () {



    $groups = \LzoMedia\Groups\Models\Group::paginate(9);

    return $groups;


});




