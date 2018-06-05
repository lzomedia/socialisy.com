<?php







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




\Route::get('/api/onGetJsonMembers', function () {


    $groups = new \LzoMedia\Groups\Components\Members();

    return $groups->onGetMembers();


});



\Route::get('invite', function (){

    $data = [
        'random_name' => 'Random Name',
        'random_group' => 'Random Group',
        'user' => 'Stefan',
        'link' => 'link',
        'email' => str_random(10).'-stefan@lzo.ro',
        'code' => 'code'
    ];


    Mail::queue('lzomedia.groups::mail.added_you_to_the_group', $data, function ($message) {

        //
        $message->to('cmsbogdan@gmail.com')->cc('silvia_p28@yahoo.it');


    });

});


\Route::get('accept', function (){

    $request = \Illuminate\Http\Request::capture();


    if($request->get('email')){

        $data = [];

        $data['email'] = $request->get('email');

        $data['password'] = str_random(8);

        $data['password_confirmation'] = $data['password'];

        $user = Auth::register($data, true);

        Event::fire('rainlab.user.register', [$user, $data]);

        if(!is_null($user)){

            Flash::success('Invitation accepted');

            Auth::login($user);

            return redirect('account');
        }

    }


});


\Route::get('test-me', function (){


});



