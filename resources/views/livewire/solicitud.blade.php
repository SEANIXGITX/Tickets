<div>

    <form wire:submit.prevent="submit">

        <div>

            @if($step == 0)
                @include('solicita.registra-carnet')
            @endif

            @if($step == 1)
                @include('solicita.registra-servicio')
            @endif

            @if($step == 2)
                @include('solicita.registra-tipo-atencion')
            @endif

            @if($step > 2)
                @include('solicita.registra-turno')
            @endif

        </div>

    </form>
</div>