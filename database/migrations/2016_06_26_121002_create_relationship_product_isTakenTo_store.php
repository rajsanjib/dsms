<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipProductIsTakenToStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_store_warehouse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('warehouse_rack_id');
            $table->integer('store_rack_id');
            $table->integer('quantity');
            $table->timestamps('date_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_store_warehouse');
    }
}
