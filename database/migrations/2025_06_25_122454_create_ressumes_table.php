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
        Schema::create('ressumes', function (Blueprint $table) {
            $table->id();
            $table->string('edu_degree')->nullable();
            $table->string('pass_year')->nullable();
            $table->string('pass_recommand')->nullable();
            $table->string('job_organization')->nullable();
            $table->string('job_designation')->nullable();
            $table->string('job_summary')->nullable();
            $table->string('job_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ressumes');
    }
};
