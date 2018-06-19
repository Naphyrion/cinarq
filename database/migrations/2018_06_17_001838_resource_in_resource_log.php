<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResourceInResourceLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('resource_in_resource_log', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('resource_log_id')->unsigned();
        $table->integer('resource_id')->unsigned();
        $table->foreign('resource_log_id')->references('id')->on('resource_logs');
        $table->foreign('resource_id')->references('id')->on('resources');

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
        Schema::dropIfExists('resource_in_resource_log');
    }
}
