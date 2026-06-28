<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\Quiniela;
use App\Models\Prediction;
use Illuminate\Support\Facades\Auth;

class BracketForm extends Component
{
    public $teams;
    public $match1;
    // Almacena la selección actual de cada partido (ej. $selections['P74'] = ID_DEL_EQUIPO)
    public $selections = []; 
    public $matchesRound1;
    

    public $bracketStructure = [
    'P89' => ['P74', 'P77'], 
    'P90' => ['P73', 'P75'],
    'P97' => ['P89', 'P90'],
    'P101' => ['P97', 'P98'],
    'P104' => ['P101', 'P102'],
];
    // Estructura del torneo para saber quién avanza a dónde
    public $bracketStructure1 = [
        // Octavos de final se alimentan de los Dieciseisavos
        'P89' => ['W74' => 'P74', 'W77' => 'P77'], // El ganador de P74 y P77 van a P89
        'P90' => ['W73' => 'P73', 'W75' => 'P75'],
        // Cuartos de final
        'P97' => ['W89' => 'P89', 'W90' => 'P90'],
        // Semifinales
        'P101' => ['W97' => 'P97', 'W98' => 'P98'],
        // Final
        'P104' => ['W101' => 'P101', 'W102' => 'P102'],
    ];
    public function getTeamsFormattedProperty() {
            return Team::all()->map(function($team) {
                return [
                    'id' => $team->id,
                    'label' => $team->fifa_code . ' - ' . $team->name
                ];
            });
        }

    public function selectTeam($teamId)
        {
            // Aquí actualizas la variable del partido correspondiente
            // Ejemplo: $this->matchesRound1[0]['winner_id'] = $teamId;
            $this->dispatch('teamSelected', teamId: $teamId);
        }    

    public function mount()
    {
        $this->teams = Team::all()->keyBy('id');
        // Inicializar los cruces iniciales (Fase de 32)
        // Aquí cargarías la fase de grupos o los cruces estáticos según la imagen
        // Inicializar el array para evitar errores de "undefined index" en la vista
        $this->selections = [];
        $this->matchesRound1 = [
            ['id' => 'P73', 'name' => 'Partido 73'],
            ['id' => 'P74', 'name' => 'Partido 74'],
            // ... agrega todos los que necesites
        ];
    }

    // Hook de Livewire: Se ejecuta cada vez que el usuario selecciona un ganador
    public function updatedSelections($value, $matchCode)
    {
        $this->cascadeUpdates($matchCode);
    }

    // Limpia selecciones futuras si cambias de opinión en una ronda anterior
    private function cascadeUpdates1($matchCode)
    {
        foreach ($this->bracketStructure1 as $nextMatch => $dependencies) {
            if (in_array($matchCode, $dependencies)) {
                $this->selections[$nextMatch] = null; // Reiniciar el siguiente partido
                $this->cascadeUpdates($nextMatch); // Recursividad hacia la final
            }
        }
    }

    private function cascadeUpdates($matchCode)
{
    foreach ($this->bracketStructure as $nextMatch => $dependencies) {
        // Si el partido que cambió es parte de las dependencias del siguiente partido
        if (in_array($matchCode, $dependencies)) {
            $this->selections[$nextMatch] = null; 
            $this->cascadeUpdates($nextMatch); 
        }
    }
}

    public function submitQuiniela()
    {
        $this->validate([
            'selections.P104' => 'required', // Asegura que la final esté llena
        ]);

        $quiniela = Quiniela::create(['user_id' => Auth::id()]);

        foreach ($this->selections as $matchCode => $teamId) {
            if ($teamId) {
                Prediction::create([
                    'quiniela_id' => $quiniela->id,
                    'match_code' => $matchCode,
                    'predicted_winner_id' => $teamId
                ]);
            }
        }

        session()->flash('message', '¡Tu quiniela ha sido guardada con éxito!');
    }
    public function render()
    {
        return view('livewire.bracket-form');
    }
}
