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
        Schema::create('sessionAnswers', function (Blueprint $table) {
            $table->id();
            $table->integer('questionId'); 
            $table->foreign('questionId')->references('id')->on('questions');
            $table->integer('answerId'); 
            $table->foreign('answerId')->references('id')->on('answers');
            $table->integer('sessionId'); 
            $table->foreign('sessionId')->references('id')->on('session');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessionAnswers');
    }
};
