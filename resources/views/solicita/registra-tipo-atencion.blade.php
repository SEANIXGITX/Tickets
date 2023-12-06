<div class="p-6 lg:p-8 bg-white">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="grid auto-rows-max gap-3 mt-4 text-gray-500 leading-relaxed">
            <h1 class="break-words text-2xl font-medium text-gray-900 text-center">
                Por favor, seleccione tipo de atención
            </h1>
            <x-input name="cliente_atencion" wire:model="cliente_atencion" type="text" pattern="[0-9]+" class="text-center text-2xl justify-center disabled:opacity-75" disabled></x-input>
        </div>
        @if ($cliente_servicio_id == 1)
            <div class="grid grid-cols-2 gap-3 place-items-center mt-6 text-gray-500 leading-relaxed">
                
                <div class="flex flex-col justify-center items-center">
                    <x-iconos.svg-user />
                    <x-button-white type="button" wire:click="atencion(0)" class="justify-center">
                        <div class="text-3xl">Normal</div>                   
                    </x-button-white>
                </div>
                
                <div class="flex flex-col justify-center items-center">
                    <x-iconos.svg-chair />
                    <x-button-white type="button" wire:click="atencion(1)" class="justify-center">
                        <div class="text-3xl">Preferencial</div>
                    </x-button-white>
                </div>
                
            </div>
        @else
            <div class="grid grid-cols-1 gap-3 place-items-center mt-6 text-gray-500 leading-relaxed">
                
                <div class="flex flex-col justify-center items-center">
                    <x-iconos.svg-user />
                    <x-button-white type="button" wire:click="atencion(0)" class="justify-center">
                        <div class="text-3xl">Normal</div>                   
                    </x-button-white>
                </div>

            </div>
        @endif
    </div>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 pb-8">
        <div class="flex flex-row items-center justify-center gap-3 mt-4 text-gray-500 leading-relaxed">

            @if($step > 0 && $step<=2)
                <x-button-white type="button" wire:click="decreaseStep" class="justify-center hover:bg-gray-400 active:bg-gray-400 focus:bg-gray-400">
                    <div class="text-3xl">Anterior</div>
                </x-button-white>
            @endif

            @if($step <= 2)
                <x-button-white type="submit" wire:click="generaticket({{ $cliente_servicio_id }})" class="justify-center hover:bg-green-400 active:bg-green-400 focus:bg-green-400">
                    <div class="text-3xl">Siguiente</div>
                </x-button-white>
            @endif

        </div>
    </div>
</div>