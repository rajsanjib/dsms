<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Storekeeper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('storeKeeper', function(Blueprint $table){
            $table->integer('emp_id')->unsigned();
            $table->foreign('emp_id')->references('id')->on('employee')->onCreate('cascade')->onUpdate('cascade');
            $table->increments('store_keeper_id');
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
        Schema::drop('storeKeeper');
    }
}
