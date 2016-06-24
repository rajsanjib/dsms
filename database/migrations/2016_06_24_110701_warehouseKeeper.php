<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WarehouseKeeper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('warehouseKeeper', function(Blueprint $table){
            $table->integer('emp_id')->unsigned();
            $table->foreign('emp_id')->references('id')->on('employee')->onCreate('cascade')->onUpdate('cascade');
            $table->increments('warehouse_keeper_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('warehouseKeeper');
    }
}
