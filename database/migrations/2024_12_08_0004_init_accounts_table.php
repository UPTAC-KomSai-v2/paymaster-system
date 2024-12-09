<?php
// accounts table
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('date_created')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('accounts')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
