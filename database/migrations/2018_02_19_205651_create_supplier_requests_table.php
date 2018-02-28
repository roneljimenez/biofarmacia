<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplierRequests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_name');
            $table->string('supplier_rif');
            $table->string('supplier_contact_name');
            $table->string('supplier_phone');
            $table->string('supplier_body');
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
        Schema::dropIfExists('supplierRequests');
    }
}
