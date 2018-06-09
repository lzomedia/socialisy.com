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
