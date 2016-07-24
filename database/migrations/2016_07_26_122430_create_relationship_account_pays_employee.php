<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipAccountPaysEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_employee', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('employee_id');
          $table->timestamps('date_time');
          $table->string('for_month');
          $table->float('total_amount');
          $table->float('paid_amount');

          $table->foreign_key('employee_id')->references('id')->on('employee')->onUpdate('cascade')->onCreate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account_employee');
    }
}
