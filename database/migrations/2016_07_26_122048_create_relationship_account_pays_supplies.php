<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipAccountPaysSupplies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_supply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supply_id')->unsigned();
            $table->integer('accountant_id')->unsigned();
            $table->timestamps('date_time');
            $table->float('total_amount');
            $table->float('paid_amount');
            $table->foreign_key('supply_id')
            ->references('id')
            ->on('supply')
            ->onUpdate('cascade')
            ->onCreate('cascade');
            $table->foreign_key('accountant_id')
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
        Schema::drop('account_supply');
    }
}
