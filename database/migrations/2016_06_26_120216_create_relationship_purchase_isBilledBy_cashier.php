<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipPurchaseIsBilledByCashier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier_customer_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id');
            $table->integer('cashier_id');
            $table->date('date');
            $table->float('total_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cashier_customer_product');
    }
}
