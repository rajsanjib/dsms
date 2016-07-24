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
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id')->unsigned();
            $table->integer('cashier_id')->unsigned();
            $table->date('date');
            $table->foreign('purchase_id')
            ->references('id')
            ->on('sales')
            ->onUpdate('cascade')
            ->onCreate('cascade');
            $table->foreign('cashier_id')
            ->references('id')
            ->on('employee')
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
        Schema::drop('cashier_customer_product');
    }
}
