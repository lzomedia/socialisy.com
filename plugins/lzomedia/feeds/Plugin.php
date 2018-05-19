<?php namespace LzoMedia\Feeds;

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
            'name'        => 'Feeds',
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
        return []; // Remove this line to activate

        return [
            'LzoMedia\Feeds\Components\MyComponent' => 'myComponent',
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
            'lzomedia.feeds.some_permission' => [
                'tab' => 'Feeds',
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
            'feeds' => [
                'label'       => 'Feeds',
                'url'         => Backend::url('lzomedia/feeds/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lzomedia.feeds.*'],
                'order'       => 500,
            ],
        ];
    }
}
