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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('teachers');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('discount_id')->nullable()->constrained('discounts')->noActionOnDelete();

            $table->string('title');
            $table->longText('description');
            $table->string('duration');
            $table->integer('price');
            $table->text('what_you_will_learn');
            $table->json('course_content');
            $table->json('training_program');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
