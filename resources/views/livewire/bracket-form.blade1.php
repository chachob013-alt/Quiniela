<div class="overflow-x-auto">
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <form wire:submit.prevent="submitQuiniela">
        <div class="bracket-container">
            
            <div class="bracket-col">
                <div class="match-card">
                    <div class="match-title">P74 - 29/06</div>
                    <select wire:model.live="selections.P74">
                        <option value="">Seleccione...</option>
                        <option value="GER">🇩🇪 Alemania</option>
                        <option value="PAR">🇵🇾 Paraguay</option>
                    </select>
                </div>
                </div>

            <div class="bracket-col">
                <div class="match-card">
                    <div class="match-title">P89 - 04/07</div>
                    <select wire:model.live="selections.P89" @if(!isset($selections['P74']) || !isset($selections['P77'])) disabled @endif>
                        <option value="">Clasificados...</option>
                        </select>
                </div>
                </div>

            <div class="bracket-col">
                <div class="match-card">
                    <div class="match-title">P97 - 09/07</div>
                    <select wire:model.live="selections.P97" disabled>
                        <option value="">Clasificados...</option>
                    </select>
                </div>
                </div>

            <div class="bracket-col">
                <div class="match-card">
                    <div class="match-title">P101 - 14/07</div>
                    <select wire:model.live="selections.P101" disabled>
                        <option value="">Clasificados...</option>
                    </select>
                </div>
            </div>

            <div class="bracket-col" style="justify-content: center; gap: 40px;">
                <div class="match-card" style="border: 2px solid gold;">
                    <div class="match-title">🏆 GRAN FINAL - P104</div>
                    <select wire:model.live="selections.P104" disabled>
                        <option value="">Clasificados...</option>
                    </select>
                </div>
                
                <div class="match-card" style="border: 2px solid #cd7f32;">
                    <div class="match-title">🥉 Tercer Puesto - P103</div>
                    <select wire:model.live="selections.P103" disabled>
                        <option value="">Clasificados...</option>
                    </select>
                </div>
            </div>

            <div class="bracket-col">
                </div>

            <div class="bracket-col">
                </div>

            <div class="bracket-col">
                </div>

            <div class="bracket-col">
                </div>

        </div>

        <div class="text-center mt-6">
            <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
                Guardar Quiniela Completa
            </button>
        </div>
    </form>
</div>
