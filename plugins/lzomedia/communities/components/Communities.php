<?php namespace LzoMedia\Communities\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use LzoMedia\Communities\Traits\SlackNotify;
use Maknz\Slack\SlackServiceProvider;
use October\Rain\Support\Facades\Flash;

use LzoMedia\Groups\Models\Group;


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
    public function onCreateGroup()
    {

        $this->initRepository();

        Flash::success('The group has been reported');


        return redirect('communities');

    }

}
