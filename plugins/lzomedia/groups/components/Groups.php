<?php namespace LzoMedia\Groups\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use October\Rain\Support\Facades\Flash;

use LzoMedia\Groups\Models\Group;


class Groups extends ComponentBase
{

    private $repository;

    public function componentDetails()
    {
        return [
            'name'        => 'Groups Component',
            'description' => 'Provides an way to access to the groups'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    /**
     * @method initRepository
     * @description Boots up the models
     * @return Group
     */
    public function initRepository()
    {
        $group = new Group();

        $this->repository = $group->with('User')->get();

    }


    /**
     * @method onRun
     * @description This is the loading of the groups css file
     */
    public function onRun(){

        $this->initRepository();

        $this->page['groups'] = $this->repository->all();


    }

    /**
     * @method onGetGroups
     * @description return an
     * @param integer $limit
     * @return mixed
     */
    public function onGetGroups(int $limit = 10)
    {

        $this->initRepository();

        $group = new Group();

        $data = $group->with('User')->paginate($limit);

        return $data;

    }

    /**
     * @method onGetGroups
     * @description return an
     * @param integer $limit
     * @return mixed
     */
    public function onCreateGroup()
    {

        $this->initRepository();

        Flash::success('The group has been reported');

        return redirect('communities');

    }

}
