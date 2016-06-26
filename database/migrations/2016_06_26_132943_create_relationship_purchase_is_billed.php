<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipPurchaseIsBilled extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier_purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id');
            $table->integer('cashier_id');
            $table->float('total_amount');
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
        Schema::drop('cashier_purchase');
    }
}
