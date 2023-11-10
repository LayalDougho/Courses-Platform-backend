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
            $table->foreignId('discount_id')->nullable()->references('id')->on('discounts')->noActionOnDelete();

            $table->string('title');
            $table->longText('description');
            $table->string('duration');
            $table->integer('price');
//<<<<<<< HEAD
//            $table->tinyInteger('discount');
//            $table->string('what_you_will_learn');
//            $table->json('course_content');
//            $table->json('training_program');
//            $table->dateTime('discount_duration');
//=======
//            $table->json('what_you_will_learn');
//            $table->json('course_content');
//            $table->json('training_program');
//>>>>>>> ac2016ac512fcf207701dc6ccc8f86ff4c2ba15e
//            $table->foreignId('teacher_id')->references('id')->on('teachers');
//            $table->timestamps();
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
