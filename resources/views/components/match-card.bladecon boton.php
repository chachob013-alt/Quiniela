@props(['matchId'])

@php
    // Aquí consultas tu modelo WorldCupMatch
    $game = \App\Models\WorldCupMatch::where('match_number', $matchId)->with('team1', 'team2')->first();
@endphp

<div class="border p-3 rounded shadow-sm bg-white w-64 my-2">
    <div class="text-xs font-bold text-gray-500 mb-2">{{ $matchId }}</div>
    
    @if($game)
        <form action="{{ route('predictions.store') }}" method="POST">
            @csrf
            <input type="hidden" name="game_id" value="{{ $game->id }}">
            
            <div class="flex flex-col gap-2">
                <label class="flex items-center justify-between p-2 border rounded cursor-pointer hover:bg-gray-50">
                    <div class="flex items-center gap-2">
                        <img src="https://api.fifa.com/api/v3/picture/flags-sq-1/{{ $game->team1->fifa_code }}" class="w-6 h-4">
                        <span>{{ $game->team1->fifa_code }}</span>
                    </div>
                    <input type="radio" name="winner_id" value="{{ $game->team1_id }}" required>
                </label>

                <label class="flex items-center justify-between p-2 border rounded cursor-pointer hover:bg-gray-50">
                    <div class="flex items-center gap-2">
                        <img src="https://api.fifa.com/api/v3/picture/flags-sq-1/{{ $game->team2->fifa_code }}" class="w-6 h-4">
                        <span>{{ $game->team2->fifa_code }}</span>
                    </div>
                    <input type="radio" name="winner_id" value="{{ $game->team2_id }}" required>
                </label>
            </div>
            <button type="submit" class="mt-3 w-full bg-blue-600 text-white text-xs py-1 rounded hover:bg-blue-700">
                Guardar Ganador
            </button>
        </form>
    @else
        <div class="text-gray-400 text-sm italic">Esperando clasificación...</div>
    @endif
</div>