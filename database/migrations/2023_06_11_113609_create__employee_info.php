<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_employee_info', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('EmpNo');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('Mname');
            $table->string('EmailAddress')->unique();
            $table->string('ContactNo');
            $table->string('TIN')->unique();
            $table->string('SSS')->unique();
            $table->string('HMDF')->unique();
            $table->string('BuildingNo');
            $table->string('Street');
            $table->string('Barangay');
            $table->string('City');
            $table->string('Province');
            $table->string('ZipCode');
            $table->string('DOB');
            $table->string('Gender');
            $table->string('WorkEmail');
            $table->string('EContactNo');
            $table->string('EContactPerson');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_employee_info');
    }
};
