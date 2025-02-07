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
        Schema::create('jobdetails', function (Blueprint $table) {
            $table->id();
            $table->string('job_overview')->nullable();
            $table->string('job_responsibilities')->nullable();
            $table->string('job_requirements')->nullable();
            $table->string('offered')->nullable();
            $table->string('job_deadline')->nullable();
            $table->string('job_salary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobdetails');
    }
};
