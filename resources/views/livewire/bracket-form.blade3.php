<div class="overflow-x-auto">
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="flex justify-between w-full p-4 gap-8">
        <div class="flex flex-col gap-4">
            @foreach(['P74', 'P77', 'P73', 'P75', 'P83', 'P84', 'P81', 'P82'] as $matchId)
                <x-match-card :match-id="$matchId" />
            @endforeach
        </div>

        <div class="flex flex-col gap-4">
            @foreach(['P76', 'P78', 'P79', 'P80', 'P86', 'P88', 'P85', 'P87'] as $matchId)
                <x-match-card :match-id="$matchId" />
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4 p-8 bg-gray-100 min-h-screen">
    
    <div class="flex flex-col justify-around">
        <div class="border-2 border-red-500 p-4 m-2 bg-white rounded">Partido 16avos</div>
        <div class="border-2 border-red-500 p-4 m-2 bg-white rounded">Partido 16avos</div>
        </div>

    <div class="flex flex-col justify-around">
        <div class="border-2 border-red-500 p-4 m-2 bg-white rounded h-24">Cuartos</div>
        <div class="border-2 border-red-500 p-4 m-2 bg-white rounded h-24">Cuartos</div>
    </div>

    <div class="flex flex-col justify-around">
        <div class="border-2 border-red-500 p-4 m-2 bg-white rounded h-40">Semifinal</div>
    </div>

    <div class="flex flex-col justify-center">
        <div class="border-2 border-red-500 p-4 m-2 bg-white rounded h-64">FINAL</div>
    </div>
    
</div>



</div>