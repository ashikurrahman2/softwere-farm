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
            $table->string('spacializedskill_name')->nullable();
            $table->integer('total_projects')->nullable();
            $table->string('complete_projects')->nullable();
            $table->string('totalclient_reviews')->nullable();
            $table->string('satisfied_clients')->nullable();
            $table->integer('experience_year')->nullable();
            $table->string('experiencesub_title')->nullable();
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
