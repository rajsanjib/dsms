<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipProductsWarehouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_warehouse', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('product_id');
            $table->integer('rack_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_warehouse');
    }
}
