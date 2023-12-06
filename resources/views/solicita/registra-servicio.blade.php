<div class="p-6 lg:p-8 bg-white">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="grid auto-rows-max gap-3 mt-4 text-gray-500 leading-relaxed">
            <h1 class="break-words text-2xl font-medium text-gray-900 text-center">
                Por favor, seleccione un servicio
            </h1>
            <x-input name="cliente_servicio_id" wire:model="cliente_servicio_id" type="text" pattern="[0-9]+" class="text-center text-2xl justify-center disabled:opacity-75" disabled></x-input>
            <x-input-error for="cliente_servicio_id" />
        </div>
        <div class="grid grid-cols-2 gap-3 md:grid-cols-3 mt-6 text-gray-500 leading-relaxed">
            @foreach ($servicios as $servicio )
                <x-button-white wire:click="servicioID({{ $servicio->id }})" type="button" class="h-24 justify-center"><div class="text-xl sm:text-2xl md:text-3xl">{{ $servicio->nombre_servicio }}</div></x-button-white>
            @endforeach
        </div>
    </div>

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 pb-8">
        <div class="flex flex-row items-center justify-center gap-3 mt-4 text-gray-500 leading-relaxed">

            @if($step > 0 && $step<=2)
                <x-button-white type="button" wire:click="decreaseStep" class="justify-center hover:bg-gray-400 active:bg-gray-400 focus:bg-gray-400">
                    <div class="text-3xl">Anterior</div>
                </x-button-white>
            @endif

            @if($step <= 2)
                <x-button-white type="submit" class="justify-center hover:bg-green-400 active:bg-green-400 focus:bg-green-400">
                    <div class="text-3xl">Siguiente</div>
                </x-button-white>
            @endif

        </div>
    </div>
</div>