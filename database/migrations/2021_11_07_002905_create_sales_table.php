<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->double('price');
            $table->integer('user_id');
            $table->double('paymentMethod');
            $table->double('discount')->nullable();
            $table->string('promotionCode')->nullable();
            $table->double('promotionCodeValue')->nullable();
            $table->boolean('isGrossSale')->default(false);
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
        Schema::dropIfExists('sales');
    }
}
