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
        Schema::create('account_supply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supply_id');
            $table->integer('accountant_id');
            $table->timestamps('date_time');
            $table->float('total_amount');
            $table->float('paid_amount');
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
