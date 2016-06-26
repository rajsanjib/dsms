<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipStoreHasProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_store', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('rack_id');
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
        Schema::drop('product_store');
    }
}
