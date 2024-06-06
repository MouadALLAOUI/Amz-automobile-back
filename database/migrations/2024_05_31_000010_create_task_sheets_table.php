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
        Schema::create('task_sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_matricule'); // vehicule registration number
            $table->timestamp('entree');
            $table->timestamp('sortie')->nullable();
            $table->text('info')->nullable();
            $table->foreignId('vehicule_id')->constrained('vehicules');
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('task_id')->constrained('tasks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_sheets');
    }
};
