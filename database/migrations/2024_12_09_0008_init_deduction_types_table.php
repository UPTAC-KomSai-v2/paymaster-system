<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// deduction_types table
return new class extends Migration
{
    public function up()
    {
        Schema::create('deduction_types', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deduction_types');
    }
};