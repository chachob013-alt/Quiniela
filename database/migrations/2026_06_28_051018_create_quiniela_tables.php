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
        // Tabla de Equipos
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fifa_code', 3)->unique(); // Ej: GER, MEX, BRA
            $table->string('flag_url'); // Ruta al icono/imagen de la bandera
            $table->timestamps();
        });

        // Tabla principal de la Quiniela por Usuario
        Schema::create('quinielas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        // Tabla de Predicciones por cada partido de la Quiniela
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiniela_id')->constrained()->onDelete('cascade');
            $table->string('match_code'); // Ej: 'P74', 'P89', 'P104'
            $table->foreignId('predicted_winner_id')->constrained('teams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predictions');
        Schema::dropIfExists('quinielas');
        Schema::dropIfExists('teams');
    }
};
