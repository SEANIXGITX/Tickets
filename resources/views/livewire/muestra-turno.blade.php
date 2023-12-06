<div>
    @if ($turnoListaLLamada)
        @foreach ($turnoListaLLamada as $turnollamada)
            <div class="p-5">{{ $turnollamada->codigo_turno }}</div>
        @endforeach
    @endif
    <div class="bg-yellow-300 p-5 animate-pulse animate-thrice animate-duration-1000 animate-delay-[10ms]">PLA-1 | C 2</div>
    <div class="p-5">PLA-1 | C 2</div>
    <div class="p-5">CON-1 | C 3</div>
    <div class="p-5">INS-1 | C 4</div>
</div>
