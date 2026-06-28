@props(['matchId'])

@php
    // Aquí consultas tu modelo WorldCupMatch
    $game = \App\Models\WorldCupMatch::where('match_number', $matchId)->with('team1', 'team2')->first();
@endphp

<div class="border p-2 rounded shadow-sm bg-white w-64">
    <div class="text-xs font-bold text-gray-500">{{ $matchId }}</div>
    @if($game)
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="https://api.fifa.com/api/v3/picture/flags-sq-1/{{ $game->team1->fifa_code }}"  class="w-6 h-4">
                <span>{{ $game->team1->fifa_code }}</span>
            </div>
            <span class="text-xs">vs</span>
            <div class="flex items-center gap-2">
                <span>{{ $game->team2->fifa_code }}</span>
                <img src="https://api.fifa.com/api/v3/picture/flags-sq-1/{{ $game->team2->fifa_code }}"  class="w-6 h-4">
            </div>
        </div>
    @else
        <div class="text-gray-400 text-sm italic">Pendiente...</div>
    @endif
</div>