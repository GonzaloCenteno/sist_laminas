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
            $table->text('tbllmnacoda');
            $table->text('tbllmnanomb');
            $table->text('tbllmnadesc');
            $table->text('tbllmnauuid');
            $table->text('tbllmnaimgo');
            $table->text('tbllmnaimgf')->nullable();
            $table->text('tbllmnapdfl')->nullable();
            $table->date('tbllmnafech');
            $table->text('tbllmnatags');
            $table->enum('tbllmnatipo',[0,1])->default(0);
            $table->enum('tbllmnalmrd',[0,1])->default(1);
            $table->timestamps();
            $table->softDeletes();
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
