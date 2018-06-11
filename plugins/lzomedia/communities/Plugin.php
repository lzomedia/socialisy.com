<?php namespace LzoMedia\Communities;

use Backend;
use System\Classes\PluginBase;


/**
 * Groups Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Communities',
            'description' => 'Communities console system',
            'author'      => 'LzoMedia',
            'icon'        => 'icon-terminal'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('communities', function () {
            return $this->app->make('LzoMedia\Communities');
        });


        $this->registerConsoleCommand('communities:generate', 'LzoMedia\Communities\Console\Generate');
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {



    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'LzoMedia\Communities\Components\Communities' => 'Communities',
            'LzoMedia\Communities\Components\Community' => 'Community',
            'LzoMedia\Communities\Components\Stories' => 'Stories',
        ];
    }


    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'groups' => [
                'label'       => 'Groups Communities',
                'url'         => Backend::url('lzomedia/communities/console'),
                'icon'        => 'icon-users',
                'permissions' => ['lzomedia.console.view'],
                'order'       => 1,
            ],
        ];
    }



}
