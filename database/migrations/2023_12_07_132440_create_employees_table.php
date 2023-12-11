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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name', 255);
            $table->integer('employee_id')->default(1);
            $table->text('email');
            $table->string('phone', 20);
            $table->string('address', 100);
            $table->date('date_of_birth');
            $table->enum('gender', ['female', 'male', 'Others'])->default('female');
            $table->string('country');
            $table->string('department');
            $table->string('position');
            $table->date('date_of_hire');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
