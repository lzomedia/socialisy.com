<?php namespace LzoMedia\Groups\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Response;
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
        $this->repository = new Group();
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
     * @return mixed
     */
    public function onGetGroups()
    {
        $this->initRepository();

        $data = $this->repository->paginate(9);

        return $data;

    }



}
