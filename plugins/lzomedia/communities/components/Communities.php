<?php namespace LzoMedia\Communities\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use LzoMedia\Communities\Traits\SlackNotify;
use Maknz\Slack\SlackServiceProvider;
use October\Rain\Support\Facades\Flash;

use LzoMedia\Groups\Models\Group;

use RainLab\User\Facades\Auth;

class Communities extends ComponentBase
{

    use SlackNotify;

    public $community;

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Groups Component',
            'description' => 'Provides an way to access to the groups'
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }


    /**
     * @method initRepository
     * @description Boots up the models
     * @param $limit
     * @return Group
     */
    public function initRepository(int $limit = 24)
    {
        $this->community = new \LzoMedia\Communities\Models\Community();

        return $this->community->with('User')->orderBy('created_at', 'DESC')->paginate($limit);

    }


    /**
     * @method onGetGroups
     * @description Creates a new group
     */
    public function onCreateCommunity()
    {


        $loggedIn = Auth::check();

        $user = Auth::register([
            'name' => 'Anonymous',
            'email' => str_random(5).'@socialtrixi.com',
            'password' => 'changeme',
            'password_confirmation' => 'changeme',
        ]);



        // Authenticate user by credentials
        $user = Auth::authenticate([
            'login' => $user->email,
            'password' =>'changeme',
        ]);

        if($loggedIn){
            $user = \Auth::getUser();
        }


        
        $community = new \LzoMedia\Communities\Models\Community();

        $community->name = post('name');
        $community->image = post('image');
        $community->description = post('description');
        $community->url = str_slug(post('name'));


        $community->user()->associate($user);


        $community->save();


        Flash::success('The community was created');



        return redirect('communities');

    }




    public function onJoinCommunity()
    {


        Flash::success('You joined the community');

        return redirect('communities');

    }

}
