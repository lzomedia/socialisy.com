<?php namespace LzoMedia\Groups\Components;

use Cms\Classes\ComponentBase;
use LzoMedia\Groups\Models\Member;

class Members extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Members Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onGetMembers()
    {


        return Member::paginate(10);


    }


}
