<?php namespace LzoMedia\Groups\Components;

use Cms\Classes\ComponentBase;

use LzoMedia\Groups\Models\Group as GroupModel;
use LzoMedia\Groups\Models\Post;
use LzoMedia\Groups\Traits\Seo;
use October\Rain\Support\Facades\Flash;
use RainLab\User\Facades\Auth;


class Group extends ComponentBase
{

    use Seo;

    public function componentDetails()
    {
        return [
            'name' => 'Group Component',
            'description' => 'Display the group Information'
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

        $group = GroupModel::where('url', $slug)->first();

        if (is_null($group)) {

            Flash::success('Group could not be found');

            return redirect('communities');
        }

        // posts
        $this->page['group'] = $group;

	    $this->page['posts'] = $group->posts()->paginate(60);

	    $this->page['members'] = $group->posts()->paginate(12);


        $this->setGroupSeo($this->page, $group);

    }
	
	/**
	 * @method onReportGroup
	 * @description Reports a group to the admin
	 * @todo Implement functionality
	 */
	public function onReportGroup()
	{
		Flash::success('The group has been reported');
	}



    public function onJoin()
    {


        if(Auth::check()){

            Flash::success('You have Joined!');
        }else{
            Flash::error('you need an account');
        }



    }


    public function onLeave()
    {

    }

    /**
     * @method onCreate
     */
    public function onCreate()
    {

        $post = post();
        
    }


}
