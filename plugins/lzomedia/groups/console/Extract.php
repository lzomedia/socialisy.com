<?php namespace LzoMedia\Groups\Console;



use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Queue;

use LzoMedia\GroupsExtractor\Managers\ClientManager;


class Extract extends Command
{
    /**
     * @var string The console command name.
     */
    protected $name = 'groups:extract';

    /**
     * @var string The console command description.
     */
    protected $description = 'No description provided yet...';

    /**
     * Execute the console command.
     * @return void
     */
    public function handle()
    {
        $extract = $this->ask('What do you want to extract?');


        switch ($extract){


            case 'yahoo':

                $this->yahoo();

                break;

            case 'facebook':

                $this->facebook();

                break;
            default:
                return $this->info("Command not found use yahoo or facebook ");

        }

    }

    /**
     * Get the console command arguments.
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * Get the console command options.
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }

    /**
     *
     */
    public  function yahoo(){

        $response =  $this->ask('Are you sure?');

        if($response == 'yes'){

            //client
            $client = new ClientManager();

            //start the Yahoo
            $socialType = new YahooApp();

            //Type of extractor
            $typeOfDataToExtract = new GroupExtractor();

            //extractor type should be a interface up
            $socialType->setExtractorType($typeOfDataToExtract);

            // set socialType
            $client->setSocialType($socialType);

            $groups  = ($client->process());


            foreach ($groups as $save){


                $saveData = [
                    'name' => strtoupper( str_replace(['_','-'],' ', $save->name)),
                    'group_id' => md5($save->name),
                    'url' => $save->name,
                    'type'=> 'yahoo',
                    'description' => strip_tags($save->description), // optional
                    'short_description', // optional
                    'image' => $save->image,   // optional
                    'private' => 0, // 0 or 1
                    'extra_info' => null,
                    'settings',
                    'conversation_id',
                ];

                //todo check before you insert

                $group = new \LzoMedia\Groups\Models\Group();

                $group = $group->where('group_id','', $saveData['group_id'])->first();

                if(!$group){

                    $create = \Groups::create(1, $saveData);
                    
                }


            }


        }

    }

	/**
	 * @extract -  the facebook groups from the user
	 *
	 */
    public  function facebook(){

        $response =  $this->ask('Are you sure?');

        if($response == 'yes'){

            $token = $this->ask('Please provide the developer token');

	        /// start the queue

	        $fb = new \LzoMedia\FacebookExtractor\FacebookExtractor($token);

	        $fb->group_id = $this->ask("Provide an group id pls");


            $publicGroups = [
                '672092929556283',
                '142484599457471',
                '499533616780656'
            ];

            $data = [];

            foreach ($publicGroups as $p){

                $fb = new \LzoMedia\FacebookExtractor\FacebookExtractor($token, $p);

                //todo introduce groups info data group

                $fb->groups();

                $data[$p]['members'] = $fb->members();
                $data[$p]['posts']  = $fb->posts();

            }



//            // @todo Event Fire start parsing the freaking posts
//	        foreach ($response as $group){
//
//		        //Queue::push('LzoMedia\Groups\Queue\ImportGroup', $group);
//
//		        Queue::push('LzoMedia\Groups\Queue\ImportPosts', ['group' => $group, 'token'=>$token]);
//
//
//	        }


            return $data;

        }

    }


}
