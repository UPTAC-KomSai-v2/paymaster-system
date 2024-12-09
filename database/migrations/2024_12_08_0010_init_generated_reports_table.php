<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// generated_reports table
return new class extends Migration
{
    public function up()
    {
        Schema::create('generated_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_created');
            $table->foreignId('generated_by')->constrained('accounting_staff')->onDelete('cascade');
            $table->string('file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('generated_reports');
    }
};