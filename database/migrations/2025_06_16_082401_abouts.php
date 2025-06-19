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
         Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('titlewise_project')->nullable();
            $table->string('skill_percent')->nullable();
            $table->integer('experience_year')->nullable();
            $table->integer('complete_project')->nullable();
            $table->integer('total_reviews')->nullable();
            $table->integer('satisfied_client')->nullable();
            $table->string('eduorganize_name')->nullable();
            $table->string('pass_year')->nullable();
            $table->string('edu_description')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('organize_description')->nullable();
            $table->string('organize_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
           Schema::dropIfExists('abouts');
    }
};
