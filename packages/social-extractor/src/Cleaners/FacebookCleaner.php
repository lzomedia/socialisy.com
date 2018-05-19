<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/24/18
 * Time: 7:59 AM
 */

namespace LzoMedia\SocialExtractor\Cleaners;


use Illuminate\Support\Collection;
use LzoMedia\SocialExtractor\Models\Group;
use LzoMedia\SocialExtractor\Models\Member;
use LzoMedia\SocialExtractor\Traits\Cleaner;

/**
 * Class FacebookCleaner
 * @package LzoMedia\SocialExtractor\Cleaners
 */
class FacebookCleaner
{

    use Cleaner;

    private $model;

    private $type = 'Facebook';

    private $email = false;


    public function __construct()
    {
        $this->model = new Group();

    }


    /**
     * @method clean
     * @param $data
     * @return Group
     */
    public function clean($data)
    {

        foreach ($data as $d) {


            switch ($d['type']) {


                case 'info':

                    $this->setInfo($d['data']);

                    break;

                case 'feed':

                    $this->setFeed($d['data']);

                    break;

                case 'members':

                    $this->setMembers($d['data']);

                    break;

                case 'videos':

                    $this->setVideos($d['data']);

                    break;

                case 'events':

                    $this->setEvents($d['data']);

                    break;
            }


        }

        return $this->model;


    }


    /**
     * @method setInfo
     * @description Starts the group object and attaches data to it
     * @param $group | JsonObject
     * @return Group
     */
    public function setInfo($group)
    {


        $this->model = new Group();

        if (property_exists($group, 'id')) {
            $this->model->setId($group->id);
        }

        $this->model->setName($this->setName($group->name));

        $this->model->setSlug($this->setSlug($group->name));

        if (property_exists($group, 'description')) {
            $this->model->setDescription($this->setDescription($group->description));
        }
        if (property_exists($group, 'privacy')) {
            $this->model->setPrivacy($this->setPrivacy($group->privacy));
        }
        if (property_exists($group, 'cover')) {

            $this->model->setCover($this->setCover($group->cover));

        }
        if (property_exists($group, 'email')) {
            $this->model->setEmail($this->setEmail($group->email));
        }

        $this->model->setType($this->type);

        return $this->model;
    }


    /**
     * @method setMembers
     * @description Clean the members and attaches them to the group model
     * @param $members Collection
     * @return void
     */
    private function setMembers($members)
    {

        if (property_exists($members, 'data')) {


            foreach ($members->data as $data) {


                $member = new Member();


                $member->name = $this->setName($data->name);


                if (property_exists($data, 'id')) {

                    $member->id = $data->id;

                    unset($data->id);

                }

                if (property_exists($data, 'cover')) {

                    $member->avatar = $this->setCover($data->cover);

                    unset($data->cover);

                }

                if (property_exists($data, 'id')) {

                    $member->email = $this->setEmail($data->id . '-' . $this->model->email);

                }


                if (property_exists($data, 'joined')) {


                    $member->created_at = $this->setTime($data->joined);


                }


                $this->model->members->push($member);


            }

            //you need to push each time
            $this->model->setMembers($this->model->members);


        }
    }


    /**
     * @method setFeed
     * @
     * @param $feeds
     */
    public function setFeed($feeds)
    {
        if (property_exists($feeds, 'data')) {

            $this->model->feeds = collect([]);

            foreach ($feeds->data as $key => $feed) {

                //todo implement Post Model Here

                if (property_exists($feed, 'name')) {

                    $feed->name = $this->setName($feed->name);

                }

                if (property_exists($feed, 'description')) {

                    $feed->description = $this->setDescription($feed->description);


                }

                if (property_exists($feed, 'link')) {

                    $feed->link = ($feed->link);

                }

                if (property_exists($feed, 'created_time')) {

                    $feed->created_at = $this->setTime($feed->created_time);

                    unset($feed->created_time);

                }

                if (property_exists($feed, 'from')) {


                    $member = new Member();

                    $member->id = $feed->from->id;
                    $member->name = $feed->from->name;
                    $member->avatar = $this->setCover(@$feed->from->cover);
                    $member->email = $this->setEmail($member->id . '-' . $this->model->id);


                    $this->model->members->push($member);



                    $feed->from = ($feed->from->id);

                }

                $this->model->feeds->push($feed);

            }

            $this->model->setFeeds($this->model->feeds);
        }

    }

    /**
     *
     */
    public function setVideos($videos)
    {

        //todo implement set video method
    }

    /**
     *
     */
    public function setEvents($events)
    {
        //todo implement set events method
    }
}