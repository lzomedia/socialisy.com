<?php namespace LzoMedia\Groups;

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
            'name'        => 'Groups',
            'description' => 'Groups community system',
            'author'      => 'LzoMedia',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('groups', function () {
            return $this->app->make('LzoMedia\Groups\Groups');
        });


        $this->registerConsoleCommand('groups.extract', 'LzoMedia\Groups\Console\Extract');
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
            'LzoMedia\Groups\Components\Communities' => 'Groups',
            'LzoMedia\Groups\Components\Group' => 'Group',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'lzomedia.groups.some_permission' => [
                'tab' => 'Groups',
                'label' => 'Some permission'
            ],
        ];
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
                'label'       => 'Groups Manager',
                'url'         => Backend::url('lzomedia/groups/groupsmanager'),
                'icon'        => 'icon-users',
                'permissions' => ['lzomedia.groups.*'],
                'order'       => 500,
            ],
        ];
    }



}
