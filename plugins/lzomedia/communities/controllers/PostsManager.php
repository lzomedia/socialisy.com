<?php namespace LzoMedia\Groups\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Posts Manager Back-end Controller
 */
class PostsManager extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('LzoMedia.Groups', 'groups', 'postsmanager');
    }
}
