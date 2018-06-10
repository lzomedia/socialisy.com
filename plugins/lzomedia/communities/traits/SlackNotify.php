<?php


namespace LzoMedia\Communities\Traits;
use Maknz\Slack\Client;

trait SlackNotify {

    protected $slack_action = 'TB444D6C9/BB5MLUVJB/QeDfCYE7nOIPgqHPnRpGNyNI';


    /**
     * @param $to
     * @param $message
     */
    function notify($to,$message){



        $settings = [
            'username' => 'Communities Ai',
            'channel' => '#general',
            'link_names' => true
        ];

        $client = new Client('https://hooks.slack.com/services/'.$to, $settings);

        $client->to('#crond')->send($message);


    }


}