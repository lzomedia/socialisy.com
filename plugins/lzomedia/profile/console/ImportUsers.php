<?php

namespace LzoMedia\Profile\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Facades\Queue;

use Maatwebsite\Excel\Facades\Excel;

/**
 * Created by PhpStorm.
 * User: lzo
 * Date: 20/04/17
 * Time: 23:14
 */

class ImportUsers extends Command
{

    /**
     * @var string The console command name.
     */
    protected $name = 'import:users';

    /**
     * @var string The console command description.
     */
    protected $description = 'Provides an way to import large csv files with users';

    /**
     * Execute the console command.
     * @return void
     */
    public function fire()
    {

        $response = $this->ask('Please provide file location');

        $data = Excel::load($response, function($reader) {})->get();
        
        if(!empty($data) && $data->count()){

            foreach ($data as $key => $value) {

                Queue::push('LzoMedia\Profile\Queue\ImportUser', $value);

            }

        }


    }

}