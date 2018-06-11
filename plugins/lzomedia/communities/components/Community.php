<?php namespace LzoMedia\Communities\Components;

use Cms\Classes\ComponentBase;

use LzoMedia\Communities\Traits\SlackNotify;
use LzoMedia\Groups\Models\Group as GroupModel;
use LzoMedia\Groups\Models\Post;
use LzoMedia\Groups\Traits\Seo;
use October\Rain\Support\Facades\Flash;
use RainLab\User\Facades\Auth;


class Community extends ComponentBase
{

    use Seo;
    use SlackNotify;

    public function componentDetails()
    {
        return [
            'name' => 'Community Component',
            'description' => 'Display the Community information'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function onRun()
    {
        $slug = $this->param('url');

        $community = \LzoMedia\Communities\Models\Community::where('url', $slug)->first();

        if (is_null($community)) {


            Flash::success('Community could not be found');

            $this->notify('', 'Ups a 404 error on socialisy.com');

            return redirect('communities');
        }

        // posts
        $this->page['group'] = x;

	    $this->page['posts'] = $community->posts()->paginate(60);

	    $this->page['members'] = $community->posts()->paginate(12);


        $this->setGroupSeo($this->page, $community);

    }
	
	/**
	 * @method onReportGroup
	 * @description Reports a group to the admin
	 *
	 */
	public function onReport()
	{
		Flash::success('The group has been reported');
	}


    /**
     * @method onJoin
     * @description This allows a user to join one
     */
    public function onJoin()
    {


        if(Auth::check()){

            Flash::success('You have Joined!');



        }else{

            Flash::error('you need an account');
        }

    }

    /**
     * @method onCreate
     */
    public function onCreate()
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


}
