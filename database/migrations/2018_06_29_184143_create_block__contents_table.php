<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block__contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->text('link');
            $table->text('desc');
            $table->string('title');
            $table->integer('content_id')->unsigned()->nullable();
            $table->foreign('content_id')->references('id')->on('content__blocks')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block__contents');
    }
}
