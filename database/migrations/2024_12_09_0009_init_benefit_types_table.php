<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// benefit_types table
return new class extends Migration
{
    public function up()
    {
        Schema::create('benefit_types', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('benefit_types');
    }
};