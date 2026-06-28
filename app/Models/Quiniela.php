<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiniela extends Model
{
    //
    protected $fillable = ['user_id'];

    public function predictions()
    {
        return $this->hasMany(Prediction::class);
    }
}
