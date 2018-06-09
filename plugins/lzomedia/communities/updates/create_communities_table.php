<?php namespace LzoMedia\Communities\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCommunitiesTable extends Migration
{
    public function up()
    {
        Schema::create('lzomedia_communities_communities', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lzomedia_communities_communities');
    }
}
