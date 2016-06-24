<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Table for employee
        Schema::create('employee', function(Blueprint $emp){
            $emp->increments('id')->unique()->primary();
            $emp->string('firstName')->notNull();
            $emp->string('middleName');
            $emp->string('lastName')->notNull();
            $emp->date('dateJoined')->notNull();
            $emp->strin('email');
            $emp->string('mobileNumber');
            $emp->string('address');
            $emp->date('dob');
            $emp->string('sex');
            $emp->string('position');
            $emp->string('salary');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the table employee
        Schema::drop('employee');
    }
}
