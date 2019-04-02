<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->enum('category', ['graphic_design', 'interior_design','video_presentation','mobile_apps','website_apps','desktop_apps']);
            $table->string('about_company');
            $table->text('target');
            $table->text('head_image');
            $table->text('main_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
