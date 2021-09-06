<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblusplTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbluspl', function (Blueprint $table) {
            $table->bigInteger('tblplancdgo')->unsigned()->required();
            $table->bigInteger('tblusrocdgo')->unsigned()->required();
            $table->char('tblusplflag', 1)->default('A');

            $table->foreign('tblplancdgo')->references('tblplancdgo')->on('tblplan');
            $table->foreign('tblusrocdgo')->references('tblusrocdgo')->on('tblusro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbluspl');
    }
}
