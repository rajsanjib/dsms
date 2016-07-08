<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('product_name');
            $table->float('marked_price');
            $table->float('selling_price');
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onCreate('cascade')->onUpdate('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onCreate('cascade')->onUpdate('cascade');
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
        Schema::drop('products');
    }
}
