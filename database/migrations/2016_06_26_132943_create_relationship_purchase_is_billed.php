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
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cashier_id');
            $table->timestamps('date_time');
            $table->integer('sales_id')

            $table->foreign_key('sales_id')
            ->references('id')
            ->on('sale')
            ->onUpdate('cascade')
            ->onCreate('cascade');
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
