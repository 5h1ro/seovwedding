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
        Schema::create('greetings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guest');
            $table->text('greeting');
            $table->string('attendance');
            $table->integer('id_invitation')->unsigned();
            $table->timestamps();
        });

        Schema::table('greetings', function (Blueprint $table) {
            $table->foreign('id_invitation', 'id_invitation_greetings_fk_01')->references('id')->on('invitations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('greetings');
    }
};
