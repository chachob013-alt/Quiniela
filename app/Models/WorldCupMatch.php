<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorldCupMatch extends Model
{
    //
    // Indicar explícitamente que este modelo usa la tabla 'matches'
    protected $table = 'matches';
    public function team1() { return $this->belongsTo(Team::class, 'team1_id'); }
public function team2() { return $this->belongsTo(Team::class, 'team2_id'); }

public function winner() {
    return $this->belongsTo(Team::class, 'winner_id');
}
}
