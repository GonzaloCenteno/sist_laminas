<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbluscaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusca', function (Blueprint $table) {
            $table->bigInteger('tbllmnacdgo')->unsigned()->required();
            $table->bigInteger('id')->unsigned()->required();

            $table->foreign('tbllmnacdgo')->references('tbllmnacdgo')->on('tbllmna');
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblusca');
    }
}
