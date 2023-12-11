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
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employee_id')->constrained();
            $table->date('appraisal_date');
            $table->string('appraiser');
            $table->longText('goals');
            $table->integer('ratings');
            $table->longText('strength');
            $table->longText('weaknesses');
            $table->longText('development_plans');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performances');
    }
};
