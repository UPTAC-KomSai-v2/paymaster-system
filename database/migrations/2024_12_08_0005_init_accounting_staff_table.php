<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// accounting_staff table
return new class extends Migration
{
    public function up()
    {
        Schema::create('accounting_staff', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->foreignId('account_id')->constrained('accounts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounting_staff');
    }
};
