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
        Schema::create('permanent_employees', function (Blueprint $table) {
            $table->id('perEmp_id');
            $table->string('perEmp_name');
            $table->string('perEmp_title');
            $table->integer('perEmp_sg');
            $table->integer('perEmp_step');
            $table->string('perEmp_itemNo');
            $table->string('perEmp_division');
            $table->string('perEmp_imo');
            $table->integer('perEmp_monthly');
            $table->integer('perEmp_annual');
            $table->date('perEmp_dateOfBirth');
            $table->integer('perEmp_age');
            $table->char('perEmp_sex');
            $table->date('perEmp_dateOfApp');
            $table->date('perEmp_dateOfLastProm')->nullable();
            $table->string('perEmp_attainment');
            $table->string('perEmp_eligible')->nullable();
            $table->integer('perEmp_pera');
            $table->integer('perEmp_midEndBonus');
            $table->integer('perEmp_uniAllow');
            $table->integer('perEmp_cellAllow')->nullable();
            $table->integer('perEmp_cashGift');
            $table->integer('perEmp_rata')->nullable();
            $table->integer('perEmp_annivBonus')->nullable();
            $table->integer('perEmp_noOfDependent')->nullable();
            $table->integer('perEmp_childrenAllow')->nullable();
            $table->integer('perEmp_mealSubsi')->nullable();
            $table->integer('perEmp_medical')->nullable();
            $table->integer('perEmp_pei');
            $table->integer('perEmp_ecc');
            $table->integer('perEmp_pagibig');
            $table->float('perEmp_phic');
            $table->float('perEmp_gsis');
            $table->float('perEmp_total')->nullable();
            $table->string('perEmp_remarks')->nullable();
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
        Schema::dropIfExists('permanent_employees');
    }
};
