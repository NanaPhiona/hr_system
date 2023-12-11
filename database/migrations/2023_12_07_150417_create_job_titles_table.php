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
        Schema::create('job_titles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('jpb_title_id')->default(1);
            $table->string('job_title_name');
            $table->longText('job_description');
            $table->longText('responsiblities');
            $table->longText('skills_required');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_titles');
    }
};
