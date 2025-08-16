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
        Schema::table('capsules', function (Blueprint $table) {
            $table->integer('roast')->nullable();
            $table->string('tastes')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('capsules', function (Blueprint $table) {
            $table->dropColumn('roast');
            $table->dropColumn('tastes');
        });
    }
};
