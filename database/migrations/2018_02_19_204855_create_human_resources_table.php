<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumanResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humanResources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->date('humanResources_date_record');
            $table->integer('humanResources_in');
            $table->integer('humanResources_out');
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
        Schema::dropIfExists('humanResources');
    }
}
