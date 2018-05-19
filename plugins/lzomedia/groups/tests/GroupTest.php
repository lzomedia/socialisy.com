<?php
/**
 * Created by PhpStorm.
 * User: lzomedia
 * Date: 3/26/18
 * Time: 4:54 PM
 */

namespace LzoMedia\Group\Tests\Models;

use LzoMedia\Groups\Models\Group;
use PluginTestCase;

class PostTest extends PluginTestCase
{
    public function testCreateFirstPost()
    {
        $post = Group::create(['title' => 'Hi!']);

        $this->assertEquals(1, $post->id);
    }
}
