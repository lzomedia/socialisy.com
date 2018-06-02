<?php namespace LzoMedia\Stories;

use Backend;
use System\Classes\PluginBase;

/**
 * Feeds Plugin Information File
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
            'name'        => 'Stories',
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

        return [
            'LzoMedia\Stories\Components\DisplayStories' => 'DisplayStories',
        ];


    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'lzomedia.stories.view' => [
                'tab' => 'Stories',
                'label' => 'View all stories'
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
            'feeds' => [
                'label'       => 'Stories',
                'url'         => Backend::url('lzomedia/stories/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lzomedia.stories.*'],
                'order'       => 500,
            ],
        ];
    }
}
