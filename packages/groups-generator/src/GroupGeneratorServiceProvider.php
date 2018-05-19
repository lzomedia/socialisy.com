<?php


namespace LzoMedia\GroupGenerator;

use Illuminate\Support\ServiceProvider;

class GroupGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind( 'socialextractor', function () {
            return $this->app->make( 'LzoMedia\GroupGenerator\GroupGenerator' );
        } );
    }
}
