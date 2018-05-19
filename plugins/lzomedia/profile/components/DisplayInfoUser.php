<?php namespace LzoMedia\Profile\Components;

use Cms\Classes\ComponentBase;
use LzoMedia\Profile\Interfaces\ProfileInterface;
use RainLab\User\Classes\AuthManager;

class DisplayInfoUser extends ComponentBase implements ProfileInterface
{
    public function componentDetails()
    {
        return [
            'name'        => 'Display Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRun()
    {


        $username_request = $this->param('username');



        /// to do
        if($username_request){

            $user = \Auth::getUser();


            if($username_request= "me"){


                $user = \Auth::getUser();
                $this->page['profile'] = $user;


            }


            if($user == null){

                $this->page -> title ="Profile of - ".$username_request;

                $user  = \RainLab\User\Models\User::where('email', $username_request)->get();



                $this->page['profile'] = $user->first();


                $this->page -> title ="Profile of - ".$username_request;


            }



        }

    }


    public function searchByUsername($username = "")
    {
        // TODO: Implement searchbyUsername() method. $this->createUserModel();
        $auth =  AuthManager::instance();

        $query = $auth->createUserModel();


        $user = $query
            ->where('username', $username)
            ->where('is_guest', 1)
            ->first();



        return $user;
    }
}
