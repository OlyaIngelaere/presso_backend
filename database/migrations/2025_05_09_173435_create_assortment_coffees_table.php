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
        Schema::create('assortmentCoffees', function (Blueprint $table) {
            $table->id();
            $table->integer('assortmentId'); 
            $table->foreign('assortmentId')->references('id')->on('assortment');
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
        Schema::dropIfExists('assortmentCoffees');
    }
};
