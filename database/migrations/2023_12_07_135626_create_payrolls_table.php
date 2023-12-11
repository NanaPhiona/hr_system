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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('employee_id')->constrained();
            $table->integer('salary');
            $table->integer('bonus');
            $table->integer('deductions');
            $table->integer('net_salary');
            $table->date('payment_date');
            $table->text('payment_method');
            $table->longText('tax_info');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
