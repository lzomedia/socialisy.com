<?php namespace LzoMedia\Stories\Components;

use Cms\Classes\ComponentBase;
use LzoMedia\Groups\Models\Story;

class DisplayStories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Display Stories Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRender()
    {
        
    }


    public function onGetStories()
    {

        $stories = Story::paginate(10);

        return $stories;

    }
}
