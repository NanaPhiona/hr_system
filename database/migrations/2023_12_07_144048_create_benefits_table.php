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
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employee_id')->constrained();
            $table->string('health_insurance');
            $table->string('retirement_plan')->nullable();
            $table->integer('vacation_days')->default(0);
            $table->integer('sick_leave');
            $table->string('other_benefits');
            $table->date('enrollment_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefits');
    }
};
