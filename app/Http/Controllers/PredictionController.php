<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prediction; // Asegúrate de tener este modelo
use Illuminate\Support\Facades\Auth;

class PredictionController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validar que los datos sean correctos
        $request->validate([
            'game_id' => 'required|exists:matches,id',
            'winner_id' => 'required|exists:teams,id',
        ]);

        // 2. Guardar o actualizar la predicción del usuario
        // Usamos updateOrCreate para que si el usuario cambia de opinión, 
        // no cree múltiples registros, sino que sobrescriba el anterior.
        Prediction::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'game_id' => $request->game_id
            ],
            [
                'winner_id' => $request->winner_id
            ]
        );

        // 3. Retornar con un mensaje de éxito
        return back()->with('success', '¡Tu predicción ha sido guardada con éxito!');
    }
}