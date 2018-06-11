<?php
namespace LzoMedia\Communities\Components;

use Cms\Classes\ComponentBase;

use LzoMedia\Communities\Traits\SlackNotify;
use LzoMedia\Groups\Models\Group as GroupModel;
use LzoMedia\Groups\Models\Post;
use LzoMedia\Groups\Traits\Seo;
use October\Rain\Support\Facades\Flash;
use RainLab\User\Facades\Auth;


class CommunityManager extends ComponentBase
{

    use Seo;
    use SlackNotify;

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
    }

    public function defineProperties()
    {
    }



    public function onDisplayMyGroups()
    {

        $this->user = \Auth::getUser();

        return $this->user->communities();

    }

}