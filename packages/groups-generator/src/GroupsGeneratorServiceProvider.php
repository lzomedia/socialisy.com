<?php

namespace LzoMedia\GroupsGenerator;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Route;
use LzoMedia\GroupsGenerator\Classes\GroupsManager;
use LzoMedia\GroupsGenerator\Classes\Processor;


class GroupsGeneratorServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     *
     */
    public function boot()
    {

        Route::get('/testing/', function (){



            $manager = new GroupsManager();

            $processor = new Processor();

            $processor->setManager($manager);

            echo $processor->start();





            // init the client

            // start the extraction



            //clean

            //return

        });

    }

    /**
     * @method register
     * @description Generates the loader for the laravel
     */
    public function register()
    {
        $this->app->bind('groups.generator', function () {
            return $this->app->make('LzoMedia\GroupsGenerator');
        });
    }


}
