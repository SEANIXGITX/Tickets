<div class="p-6 lg:p-8 bg-white">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="grid auto-rows-max gap-3 mt-4 text-gray-500 leading-relaxed">
            <h1 class="max-w-auto break-words text-2xl font-medium text-gray-900 text-center">
                Por favor, ingrese su cédula de identidad
            </h1>
            <x-input name="cliente_ci" wire:model="cliente_ci" type="text" pattern="[0-9]+" class="text-center text-2xl justify-center disabled:opacity-75" disabled></x-input>
            <x-input-error for="cliente_ci" />
        </div>
        <div class="grid grid-cols-3 gap-3 mt-6 text-gray-500 leading-relaxed">
            <x-button-white type="button" wire:click="digito(1)" class="justify-center"><div class="text-3xl">1</div></x-button-white>
            <x-button-white type="button" wire:click="digito(2)" class="justify-center"><div class="text-3xl">2</div></x-button-white>
            <x-button-white type="button" wire:click="digito(3)" class="justify-center"><div class="text-3xl">3</div></x-button-white>
            <x-button-white type="button" wire:click="digito(4)" class="justify-center"><div class="text-3xl">4</div></x-button-white>
            <x-button-white type="button" wire:click="digito(5)" class="justify-center"><div class="text-3xl">5</div></x-button-white>
            <x-button-white type="button" wire:click="digito(6)" class="justify-center"><div class="text-3xl">6</div></x-button-white>
            <x-button-white type="button" wire:click="digito(7)" class="justify-center"><div class="text-3xl">7</div></x-button-white>
            <x-button-white type="button" wire:click="digito(8)" class="justify-center"><div class="text-3xl">8</div></x-button-white>
            <x-button-white type="button" wire:click="digito(9)" class="justify-center"><div class="text-3xl">9</div></x-button-white>
            <x-button-white type="button" wire:click="resetear" class="justify-center"><div><x-iconos.svg-close /></div></x-button-white>
            <x-button-white type="button" wire:click="digito(0)" class="justify-center"><div class="text-3xl">0</div></x-button-white>
            <x-button-white type="button" wire:click="quitardigito" class="justify-center"><div><x-iconos.svg-backspace /></div></x-button-white>
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
                <x-button-white type="submit" wire:click="saveCI" class="justify-center hover:bg-green-400 active:bg-green-400 focus:bg-green-400">
                    <div class="text-3xl">Siguiente</div>
                </x-button-white>
            @endif

        </div>
    </div>

</div>

