<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// deductions table
return new class extends Migration
{
    public function up()
    {
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('deduction_types')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deductions');
    }
};
