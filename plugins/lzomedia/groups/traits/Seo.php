<?php
/**
 * Created by PhpStorm.
 * User: lzo
 * Date: 05/05/17
 * Time: 23:26
 */

namespace LzoMedia\Groups\Traits;


trait Seo
{

    /**
     * @param $page
     * @param $group
     * @return object
     */
    function setGroupSeo($page, $group){

        $page->title = $group->name;

        $page->meta_description = trim($group->description);

        $page->meta_title = $group->name;

        $page->site_url = str_slug($group->name);

        $page->thumb = ($group->image);

        return (object) $page;

    }

    


}