<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobRequests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jobRequest_name');
            $table->string('jobRequest_last_name');
            $table->string('jobRequest_phone');
            $table->string('jobRequest_linkedin');
            $table->string('jobRequest_body');
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
        Schema::dropIfExists('jobRequests');
    }
}
