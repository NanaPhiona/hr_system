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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employee_id')->contrained();
            $table->string('leave_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('reason');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->longText('comments');
            $table->date('approval_date');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
