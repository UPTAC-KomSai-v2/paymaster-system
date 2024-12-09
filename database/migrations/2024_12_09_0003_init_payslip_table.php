<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// payslips table
return new class extends Migration
{
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('generated_report_id')->constrained('generated_reports')->onDelete('cascade');
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->integer('month');
            $table->integer('year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payslips');
    }
};