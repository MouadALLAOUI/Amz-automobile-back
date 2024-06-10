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
        Schema::create('cars_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('series')->nullable();
            $table->foreignId('cars_make_id')->constrained('cars_makes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars_models');
    }
};
