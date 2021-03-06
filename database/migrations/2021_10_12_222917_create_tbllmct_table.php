<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbllmctTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbllmct', function (Blueprint $table) {
            $table->bigInteger('tbllmnacdgo')->unsigned()->required();
            $table->bigInteger('tblctgacdgo')->unsigned()->required();

            $table->foreign('tbllmnacdgo')->references('tbllmnacdgo')->on('tbllmna');
            $table->foreign('tblctgacdgo')->references('tblctgacdgo')->on('tblctga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbllmct');
    }
}
