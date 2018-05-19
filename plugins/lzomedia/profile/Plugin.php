<?php namespace LzoMedia\Profile;

use Backend;
use System\Classes\PluginBase;
use RainLab\User\Models\User;

/**
 * Profile Plugin Information File
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
            'name'        => 'Profile',
            'description' => 'provides an way to have user profiles on the website',
            'author'      => 'LzoMedia',
            'icon'        => 'icon-user'
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


        // Extends Rainlab User fields
        User::extend(function($model) {

            $model->hasOne['profile'] = ['LzoMedia\Groups\Models\Profile'];

        });

        $this->registerConsoleCommand('users.import', 'LzoMedia\Profile\Console\ImportUsers');

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {


        return [
            'LzoMedia\Profile\Components\DisplayInfoUser' => 'DisplayInfoUser',
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
            'lzomedia.profile.some_permission' => [
                'tab' => 'Profile',
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
            'profile' => [
                'label'       => 'Profile',
                'url'         => Backend::url('lzomedia/profile/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lzomedia.profile.*'],
                'order'       => 500,
            ],
        ];
    }
}
