<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
               $table->integer('service_id')->unsigned()->nullable();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('customer_id')->unsigned()->nullable()->default(1);
            $table->foreign('service_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('status', ['binding', 'active','done'])->default('binding');            
            $table->string('description');
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
        Schema::dropIfExists('applications');
    }

}
