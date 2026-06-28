<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    protected $fillable = ['user_id', 'game_id', 'winner_id'];

    // Relación con el partido
    public function game() { return $this->belongsTo(WorldCupMatch::class, 'game_id'); }
    
    // Relación con el equipo ganador elegido
    public function winner() { return $this->belongsTo(Team::class, 'winner_id'); }
}