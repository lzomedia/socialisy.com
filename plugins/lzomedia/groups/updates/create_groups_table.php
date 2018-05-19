<?php namespace LzoMedia\Groups\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_id')->nullable();
            $table->string('type')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image',255)->nullable();
            $table->string('url',255)->nullable();
            $table->integer('user_id')->unsigned();
            $table->boolean('private')->unsigned()->default(false);
            $table->integer('conversation_id')->unsigned()->nullable();
            $table->text('extra_info')->nullable();
            $table->text('settings')->nullable();
            $table->timestamps();


        });

        Schema::create('group_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('group_id')
                ->references('id')
                ->on('groups')
                ->onDelete('cascade');
        });

        Schema::create('group_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->string('type');
            $table->integer('user_id')->unsigned();
            $table->text('extra_info')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });








        Schema::create('group_banners', function(Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('group_id');

            $table->timestamps();

        });

//        Schema::create('user_profile', function (Blueprint $table) {
//            $table->increments('id');
//            $table->integer('user_id')->index();
//            $table->string('username')->nullable();
//            $table->text('about')->nullable();
//            $table->string('city')->nullable();
//            $table->string('state')->nullable();
//            $table->string('country')->nullable();
//            $table->string('zip')->nullable();
//            $table->string('phone')->nullable();
//            $table->string('gender')->nullable();
//            $table->string('avatar')->nullable();
//            $table->timestamps();
//
//
//        });

        ///start the foreign keys



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
//        Schema::drop('groups');
//        Schema::drop('group_user');
//        Schema::drop('group_posts');
//        Schema::drop('group_comments');
//        Schema::drop('group_post');
//        Schema::drop('group_likes');
//        Schema::drop('group_reports');
//        Schema::drop('group_request');
    }
}
