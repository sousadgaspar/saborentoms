<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvetoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invetories', function (Blueprint $table) {
            $table->id();
            $table->integer('warehouse_id');
            $table->integer('produt_id');
            $table->double('oldQuantity');
            $table->double('newQuantity');
            $table->longtext('reasonForUpdate');
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
        Schema::dropIfExists('invetories');
    }
}
