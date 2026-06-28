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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('match_number'); // Ejemplo: P1, P2...
            
            // Relaciones con la tabla 'teams'
            // Suponiendo que la tabla 'teams' existe y tiene 'id'
            $table->foreignId('team1_id')->constrained('teams')->onDelete('cascade');
            $table->foreignId('team2_id')->constrained('teams')->onDelete('cascade');
            
            // Campos opcionales para almacenar resultados
            $table->integer('team1_score')->nullable();
            $table->integer('team2_score')->nullable();
            $table->string('status')->default('scheduled'); // scheduled, finished, etc.
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
