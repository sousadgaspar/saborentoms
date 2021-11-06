<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->integer('warehouse_type_id');
            $table->integer('product_id');
            $table->double('quantity');
            $table->double('unitPrice')->default(0);
            $table->double('salePrice')->nullable();
            $table->double('totalQuantitiy');
            $table->string('batch')->nullable();
            $table->double('orderDate');
            $table->date('production')->nullable();
            $table->date('expiration')->nullable();
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
        Schema::dropIfExists('warehouses');
    }
}
