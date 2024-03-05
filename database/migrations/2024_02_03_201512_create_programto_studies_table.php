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
        Schema::create('programto_studies', function (Blueprint $table) {
            $table->id();
            $table->string('program_name');
            $table->longText('program_description');
            $table->string('program_yearof_study');
            $table->integer('program_division')->nullable();
            $table->integer('program_grade_min')->nullable();
            $table->integer('program_grade_max')->nullable();
            $table->foreignId('universityID')->references('id')->on('universities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programto_studies');
    }
};
