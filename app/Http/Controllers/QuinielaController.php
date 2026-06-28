<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuinielaController extends Controller
{
    //
    // En tu Controlador
    public function show()
        {
        $bracket = [
            'ronda_16' => WorldCupMatch::where('round', '16')->get(),
            'cuartos'  => WorldCupMatch::where('round', 'quarter')->get(),
            // ...
        ];

        return view('quiniela.show', compact('bracket'));
        }
}
