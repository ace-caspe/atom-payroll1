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
        Schema::create('tbl_company_info', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('CompanyName');
            $table->string('EmailAddress');
            $table->string('ContactNo');
            $table->integer('CompanyTypeID');
            $table->string('Description');
            $table->string('tbl_CompanyInfocol');
            $table->integer('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_company_info');
    }
};
