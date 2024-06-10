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
        Schema::create('auto_parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('part_number')->unique();
            $table->text('description')->nullable();
            $table->string('price');
            $table->integer('stock_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_parts');
    }
};