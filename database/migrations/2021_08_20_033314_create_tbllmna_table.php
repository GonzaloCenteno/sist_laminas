<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbllmnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbllmna', function (Blueprint $table) {
            $table->bigIncrements('tbllmnacdgo');
            $table->text('tbllmnacoda')->unique();
            $table->text('tbllmnanomb')->unique();
            $table->text('tbllmnadesc');
            $table->text('tbllmnauuid');
            $table->text('tbllmnaimgn');
            $table->date('tbllmnafech');
            $table->text('tbllmnatags');
            $table->enum('tbllmnatipo',[0,1])->default(0);
            $table->bigInteger('tblctgacdgo')->unsigned();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('tbllmna');
    }
}
