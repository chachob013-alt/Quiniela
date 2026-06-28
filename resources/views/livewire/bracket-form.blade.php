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
</div>