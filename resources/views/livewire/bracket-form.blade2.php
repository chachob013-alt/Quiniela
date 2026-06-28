<div class="overflow-x-auto">
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
<div class="p-8 bg-gray-100 overflow-x-auto">
    <div class="bracket-grid">
        
        <div class="flex flex-col gap-10">
            @foreach($matchesRound1 as $match)
                <div class="match-box connector-right">
                    <label class="text-[10px] font-bold text-gray-400">P{{ $match['id'] }}</label>
                    <div x-data="{ open: false, selectedTeam: null }" class="relative w-64">
                        <button @click="open = !open" type="button" 
                                class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-4 py-2 flex items-center justify-between hover:bg-gray-50 focus:outline-none">
                            
                            <div class="flex items-center gap-3">
                                <template x-if="selectedTeam">
                                    <img :src="'https://api.fifa.com/api/v3/picture/flags-sq-1/'+ selectedTeam.code" 
                                        class="w-6 h-4 object-cover">
                                </template>
                                <span x-text="selectedTeam ? selectedTeam.name : 'Seleccionar equipo'"></span>
                            </div>

                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                        </button>

                        <ul x-show="open" @click.away="open = false" 
                            class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base overflow-auto border border-gray-200">
                            @foreach($teams as $team)
                                <li @click="selectedTeam = {name: '{{ $team['fifa_code'] }}', code: '{{ $team['fifa_code'] }}', id: {{ $team['id'] }}}; open = false; $wire.selectTeam({{ $team['id'] }})"
                                    class="cursor-pointer hover:bg-indigo-600 hover:text-white px-4 py-2 flex items-center gap-3">
                                    <img src="https://api.fifa.com/api/v3/picture/flags-sq-1/{{ $team['fifa_code'] }}" 
                                        alt="{{ $team['fifa_code'] }}" class="w-6 h-4 object-cover">
                                    <span>- {{  $team['fifa_code'] }}  </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <select wire:model="selections.{{ $match['id'] }}" class="w-full text-sm border-none bg-gray-50">
                        <option value="">Seleccione...</option>
                        @foreach($teams as $team)
                            
                            <option value="{{ $team['id'] }}">
                                
                                {{ $team['fifa_code'] }} - <img src="https://api.fifa.com/api/v3/picture/flags-sq-1/{{ $team['fifa_code'] }}" width="20">
                            </option>
                        @endforeach
                    </select>
                </div>
            @endforeach
        </div>

        <div></div>

        <div class="flex flex-col gap-20">
            <div class="match-box connector-right">
                <span class="text-xs">Octavos de Final</span>
                </div>
        </div>

        <div class="flex flex-col items-center justify-center">
            <div class="bg-yellow-100 border-2 border-yellow-400 p-6 rounded-xl shadow-lg">
                <h2 class="font-bold text-center mb-4">GRAN FINAL</h2>
                </div>
        </div>

        <div></div>
        <div class="flex flex-col gap-20">
            </div>
    </div>
</div>
</div>