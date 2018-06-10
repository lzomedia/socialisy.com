<?php namespace LzoMedia\Communities\Console;



use LzoMedia\GroupsGenerator\Managers\CommunitiesManager;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Facades\Queue;
use Illuminate\Console\Command;
use LzoMedia\GroupsGenerator\Classes\GroupsManager;
use LzoMedia\GroupsGenerator\Classes\Processor;



use LzoMedia\Communities\Traits\SlackNotify;
use LzoMedia\GroupsGenerator\Clients\GitLab;
use LzoMedia\GroupsGenerator\Clients\NewsApi;
use LzoMedia\GroupsGenerator\Clients\Olx;


class Generate extends Command
{

    use SlackNotify;

    protected $chatUrl = "";


    protected $slack_action = 'TB444D6C9/BB5MLUVJB/QeDfCYE7nOIPgqHPnRpGNyNI';


    /**
     * @var string The console command name.
     */
    protected $name = 'communities:generate';

    /**
     * @var string The console command description.
     */
    protected $description = 'No description provided yet...';

    /**
     * @method Handle
     * @description Execute the console command.
     * @return void
     */
    public function handle()
    {


        $client = new Olx();

        $client = new GitLab();

        $client = new NewsApi();

        $manager = new CommunitiesManager($client);

        $processor = new Processor();

        $processor->setManager($manager);

        $response =  $processor->start();


        $this->notify($this->slack_action, $response);


    }

    /**
     * Get the console command arguments.
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }


}
