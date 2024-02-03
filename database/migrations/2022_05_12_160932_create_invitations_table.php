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
        Schema::create('invitations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_couple');
            $table->integer('id_member')->unsigned();
            $table->string('nickname_man');
            $table->string('fullname_man');
            $table->string('father_man');
            $table->string('mother_man');
            $table->tinyInteger('child_man');
            $table->text('photo_man');
            $table->string('nickname_woman');
            $table->string('fullname_woman');
            $table->string('father_woman');
            $table->string('mother_woman');
            $table->tinyInteger('child_woman');
            $table->text('photo_woman');
            $table->text('photo_couple');
            $table->dateTime('countdown');
            $table->string('bank');
            $table->bigInteger('number_bank');
            $table->string('name_bank');
            $table->string('name_gift');
            $table->string('number');
            $table->text('address_gift');
            $table->string('slug');
            $table->integer('visitor')->default(0);
            $table->timestamps();
        });

        Schema::table('invitations', function (Blueprint $table) {
            $table->foreign('id_member', 'id_user_invitations_fk_01')->references('id')->on('members')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitations');
    }
};
