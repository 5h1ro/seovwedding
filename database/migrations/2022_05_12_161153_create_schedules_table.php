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
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_schedule');
            $table->dateTime('date_schedule');
            $table->text('address_schedule');
            $table->text('location_schedule')->nullable();
            $table->text('link_location_schedule')->nullable();
            $table->integer('id_invitation')->unsigned();
            $table->timestamps();
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('id_invitation', 'id_invitation_schedules_fk_01')->references('id')->on('invitations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
