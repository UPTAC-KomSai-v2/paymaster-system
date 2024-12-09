<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// benefits table
return new class extends Migration
{
    public function up()
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('benefit_types')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('benefits');
    }
};
