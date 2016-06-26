<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipSuppliersProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('supplier_id');
            $table->timestamps('date');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_suppliers');
    }
}
