<?php namespace LzoMedia\Groups\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Response;
use LzoMedia\Groups\Models\Group;

class Groups extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Groups Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    /**
     * @method onRun
     * @description This is the loading of the groups css file
     */
    public function onRun(){

        $this->page['groups'] = Group::orderBy('created_at', 'ASC')->paginate(9);


    }





}
