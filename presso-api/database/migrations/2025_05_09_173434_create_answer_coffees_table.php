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
        Schema::create('answerCoffees', function (Blueprint $table) {
            $table->id();
            $table->integer('questionId'); 
            $table->foreign('questionId')->references('id')->on('questions');
            $table->integer('answerId'); 
            $table->foreign('answerId')->references('id')->on('answers');
            $table->integer('coffeeId'); 
            $table->foreign('coffeeId')->references('id')->on('coffee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answerCoffees');
    }
};
