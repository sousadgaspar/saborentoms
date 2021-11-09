<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->integer('workgroup_id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('recipe_id');
            $table->double('recipe_items_id');
            $table->double('yield');// total amount of products generated
            //automatically insert the yield in the warehouse table as a new proct stored in the Production warehouse
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
        Schema::dropIfExists('productions');
    }
}
