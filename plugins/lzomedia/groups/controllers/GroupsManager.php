<?php namespace LzoMedia\Groups\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Groups Manager Back-end Controller
 */
class GroupsManager extends Controller
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

        BackendMenu::setContext('LzoMedia.Groups', 'groups', 'groupsmanager');
    }

    /**
     * @method onExtractGroups
     * @description This allows you to extract groups data from facebook
     */
    public function onExtractGroups()
    {
        //@todo implement the logic
	    
	    \Flash::success("Data was saved");
    }
}
