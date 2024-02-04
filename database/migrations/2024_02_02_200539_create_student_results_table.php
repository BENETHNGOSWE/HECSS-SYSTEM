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
        Schema::create('student_results', function (Blueprint $table) {
            $table->id();
            $table->string('student_number');
            $table->string('physics_grade');
            $table->string('math_grade');
            $table->string('civics_grade');
            $table->string('kiswahili_grade');
            $table->string('english_grade');
            $table->string('chemistry_grade');
            $table->string('history_grade');
            $table->integer('student_grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_results');
    }
};
