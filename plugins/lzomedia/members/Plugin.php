<?php namespace LzoMedia\Members;

use Backend;
use System\Classes\PluginBase;

/**
 * Members Plugin Information File
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
            'name'        => 'Members',
            'description' => 'No description provided yet...',
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
        //return []; // Remove this line to activate

        return [
            'LzoMedia\Members\Components\DisplayMembers' => 'DisplayMembers',
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
            'lzomedia.members.some_permission' => [
                'tab' => 'Members',
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
        return []; // Remove this line to activate

        return [
            'members' => [
                'label'       => 'Members',
                'url'         => Backend::url('lzomedia/members/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lzomedia.members.*'],
                'order'       => 500,
            ],
        ];
    }
}
