<?php namespace LzoMedia\Groups\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use LzoMedia\Groups\Models\Group;
use LzoMedia\Stories\Models\Story;
use Carbon\Carbon;
use October\Rain\Auth\Models\User;

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

    }

    /**
     * @method onGetStories
     */
    public function onGetStories()
    {

        $response = file_get_contents('https://newsapi.org/v2/top-headlines?language=en&pageSize=75&apiKey=d27f06313bfb4654b7b88b2e3250fc70');

        $response = json_decode($response);

        $group = Group::inRandomOrder()->get();;
        $user = User::inRandomOrder()->get();
        $story = new Story();


        foreach ($response->articles as $key => $article){



            $created_at = Carbon::parse($article->publishedAt);



            $story->type = 'article';

            $story->title = $article->title;

            $story->user_id = $user->id;

            $story->message = $article->description;

            $story->image = $article->urlToImage;


            $group->posts()->attach($story);

            $group->save();

        }


    }




}
