<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipCustomersProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('product_id');
            $table->timestamps('date_time');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers_products');
    }
}
