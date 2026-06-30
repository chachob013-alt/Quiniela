@props(['matchId'])

@php
    // Aquí consultas tu modelo WorldCupMatch
    $game = \App\Models\WorldCupMatch::where('match_number', $matchId)->with('team1', 'team2')->first();
@endphp

<div class="border p-3 rounded shadow-sm bg-white w-60 my-2">
    <div class="text-xs font-bold text-gray-500 mb-2">{{ $matchId }}</div>
    
    @if($game)
        <form action="{{ route('predictions.store') }}" method="POST">
            @csrf
            <input type="hidden" name="game_id" value="{{ $game->id }}">
            
            <div class="flex flex-col gap-2">
                <label class="flex items-center justify-between p-2 border rounded cursor-pointer hover:bg-gray-50">
                    <div class="flex items-center gap-2">
                        <img src="{{ $game->team1->flag_url }}" class="w-6 h-4">
                        <span>{{ $game->team1->fifa_code }}</span>
                    </div>
                    
                </label>

                <label class="flex items-center justify-between p-2 border rounded cursor-pointer hover:bg-gray-50">
                    <div class="flex items-center gap-2">
                        <img src="{{ $game->team2->flag_url }}" class="w-6 h-4">
                        <span>{{ $game->team2->fifa_code }}</span>
                    </div>
                   
                </label>
            </div>
           
        </form>
    @else
        <div class="text-gray-400 text-sm italic">Esperando clasificación...</div>
    @endif
</div>