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
        Schema::table('invitations', function (Blueprint $table) {
            $table->string('color_primary')->default('rgba(182, 132, 68, 0.589)');
            $table->string('color_primary_fill')->default('rgba(212, 168, 109, 1)');
            $table->string('color_text')->default('rgba(143, 93, 29, 1)');
            $table->string('color_text_darken')->default('rgba(175, 104, 11, 1)');
            $table->string('color_background')->default('rgba(230, 195, 154, 0.3)');
            $table->string('ornament1')->default('http://seovwedding.si-bima.com/template/template1/ornament1.png');
            $table->string('ornament1_flip')->default('http://seovwedding.si-bima.com/template/template1/ornament1flip.png');
            $table->string('ornament2')->default('http://seovwedding.si-bima.com/template/template1/ornament2.png');
            $table->string('ornament3')->default('http://seovwedding.si-bima.com/template/template1/ornament3.png');
            $table->string('backsound')->default('http://seovwedding.si-bima.com/template/template1/backsound.mp3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
