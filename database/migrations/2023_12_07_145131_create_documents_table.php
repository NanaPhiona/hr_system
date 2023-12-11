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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employee_id')->constrained();
            $table->enum('document_type', ['national_id', 'passport', 'driving_permit'])->default('national_id');
            $table->date('expiry_date');
            $table->date('upload_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
