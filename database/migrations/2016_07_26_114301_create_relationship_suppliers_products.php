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
        Schema::create('supply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('supplier_id');
            $table->timestamps('date');
            $table->integer('quantity');
            $table->foreign_key('product_id')
                    ->references('id')
                    ->on('products')
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
        Schema::drop('products_suppliers');
    }
}
