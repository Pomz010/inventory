<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
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
            $table->string('employee_number')->unique();
            $table->foreignId('business_unit_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->foreignId('section_id')->constrained();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middle_name');
            $table->string('ext_name')->nullable();
            $table->string('gender');
            $table->string('position');
            $table->date('date_hired');
            $table->string('employment_status');
            $table->string('email')->unique();
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
}
