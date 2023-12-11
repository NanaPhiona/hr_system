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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('applicant_name');
            $table->string('position_applied_for');
            $table->longText('resume');
            $table->longText('cover_letter');
            $table->date('application_date');
            $table->date('interview_date');
            $table->enum('status', ['pending', 'review', 'interview', 'offer', 'hired', 'rejected'])->default('pending');
            $table->longText('feedback');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitments');
    }
};
