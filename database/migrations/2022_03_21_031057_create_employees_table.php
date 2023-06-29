<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_type');
            $table->string('emp_fName');
            $table->string('emp_mName');
            $table->string('emp_lName');
            $table->string('emp_title');
            $table->integer('emp_sg');
            $table->integer('emp_step')->nullable();
            $table->string('emp_itemNo')->nullable();
            $table->date('emp_dateOfSeparation')->nullable();
            $table->string('emp_statOfAppoint')->nullable();
            $table->string('emp_mos')->nullable();
            $table->string('emp_imo');
            $table->string('emp_status')->nullable();
            $table->string('emp_charging')->nullable();
            $table->double('emp_monthly');
            $table->double('emp_annual');
            $table->date('emp_dateOfBirth');
            $table->char('emp_sex');
            $table->date('emp_dateOfApp')->nullable();
            $table->date('emp_dateOfLastProm')->nullable();
            $table->date('emp_dateOfAssumption')->nullable();
            $table->string('emp_attainment');
            $table->string('emp_eligible');
            $table->double('emp_pera')->nullable();
            $table->double('emp_midEndBonus')->nullable();
            $table->double('emp_uniAllow')->nullable();
            $table->double('emp_cellAllow')->nullable();
            $table->double('emp_cashGift')->nullable();
            $table->double('emp_rata')->nullable();
            $table->double('emp_annivBonus')->nullable();
            $table->integer('emp_noOfDependent')->nullable();
            $table->double('emp_childrenAllow')->nullable();
            $table->double('emp_mealSubsi')->nullable();
            $table->double('emp_medical')->nullable();
            $table->double('emp_pei')->nullable();
            $table->double('emp_ecc')->nullable();
            $table->double('emp_pagibig')->nullable();
            $table->double('emp_phic')->nullable();
            $table->double('emp_gsis')->nullable();
            $table->double('emp_total');
            $table->string('emp_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
