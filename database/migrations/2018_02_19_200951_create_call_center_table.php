<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callCenter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->date('callCenter_date_record');
            $table->integer('callCenter_received_calls');
            $table->integer('callCenter_effective_calls');
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
        Schema::dropIfExists('callCenter');
    }
}
