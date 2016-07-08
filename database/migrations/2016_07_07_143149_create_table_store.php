<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('store', function (Blueprint $table) {
             $table->increments('rack_id');
             $table->integer('capacity');
             $table->integer('available');
             $table->integer('product_id')->unsigned();
             
             $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onCreate('cascade');
         });
     }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store', function (Blueprint $table) {
            //
        });
    }
}
