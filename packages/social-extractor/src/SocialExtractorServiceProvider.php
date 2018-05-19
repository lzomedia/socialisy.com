<?php


namespace LzoMedia\SocialExtractor;

use Illuminate\Support\ServiceProvider;

class SocialExtractorServiceProvider extends ServiceProvider
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
            return $this->app->make( 'LzoMedia\SocialExtractor\SocialExtractor' );
        } );
    }
}
