<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('love_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year_ls');
            $table->text('story_ls');
            $table->integer('id_invitation')->unsigned();
            $table->timestamps();
        });

        Schema::table('love_stories', function (Blueprint $table) {
            $table->foreign('id_invitation', 'id_invitation_love_stories_fk_01')->references('id')->on('invitations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('love_stories');
    }
};
