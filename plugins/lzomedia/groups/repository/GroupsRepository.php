<?php

namespace LzoMedia\Groups\Repository;



use LzoMedia\Groups\Groups;

class GroupsRepository
{


    public function onCreateGroup(array $data)
    {

        $user = \Auth::getUser();

        $create = new Groups();

        $create->create($user->id, $data);


    }

    public function onJoinGroup(array $data)
    {
        $user = \Auth::getUser();

        $create = new Groups();
        $create->create($user->id, $data);
    }
}