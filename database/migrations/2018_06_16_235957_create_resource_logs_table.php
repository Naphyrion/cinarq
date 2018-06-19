<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pme_action')->nullable();
            $table->string('project')->nullable();
            $table->string('extracurricular_activitie')->nullable();
            $table->string('description');
            $table->string('applicant');
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
        Schema::dropIfExists('resource_logs');
    }
}
