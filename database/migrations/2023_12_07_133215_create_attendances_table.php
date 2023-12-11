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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employee_id');
            $table->date('reporting_date');
            $table->time('clock_in_time');
            $table->time('clock_out_time');
            $table->integer('total_hours');
            $table->enum('worked', ['yes', 'no'])->default('yes');
            $table->time('late_arrival');
            $table->time('departure');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
