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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('case_title')->nullable();
            $table->string('case_description')->nullable();
            $table->string('project_image')->nullable();
            $table->string('project_title')->nullable();
            $table->string('project_description')->nullable();
            $table->string('benifit_description')->nullable();
            $table->string('benifit_image')->nullable();
            $table->string('process_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
