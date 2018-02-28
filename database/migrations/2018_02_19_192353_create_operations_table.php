<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('branchOffice_id');
            $table->date('operation_date_record');
            $table->integer('operation_units');
            $table->string('operation_operations');
            $table->string('operation_values');
            $table->float('operation_units_evolution',8,2);
            $table->float('operation_operations_evolution',8,2);
            $table->float('operation_values_evolution',8,2);
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
        Schema::dropIfExists('operations');
    }
}
