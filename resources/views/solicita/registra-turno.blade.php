<div class="p-6 lg:p-8 bg-white">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="grid auto-rows-max gap-3 mt-4 text-gray-500 leading-relaxed mb-4">
            <h1 class="break-words text-2xl font-medium text-gray-900 text-center">
                Por favor, tome una captura de su ticket
            </h1>
        </div>
        <div class="shadow rounded-lg border">
            <div class="px-4 py-5 sm:px-6">
                <div class="flex flex-col justify-center items-center">
                    <x-iconos.svg-logo-eec-gnv class="w-52"/>
                    <span class="text-sm text-center font-light text-gray-500">Entidad Ejecutora de Conversión a Gas Natural Vehicular</span>
                </div>
            </div>
            <div class="border-t border-b border-gray-200 px-4 py-5 sm:p-0">
                <div class="flex flex-col justify-center items-center text-center pt-5">
                    <span class="text-sm text-center font-medium text-gray-500 pb-5">
                        {{ __('Bienvenido, su turno es:') }}
                    </span>

                    <x-input name="numero_generado" wire:model="numero_generado" type="text" class="font-bold text-center text-2xl justify-center py-5 disabled:opacity-75" disabled></x-input>

                    <span class="text-sm text-center font-medium text-gray-500 py-2">
                        {{ $fecha = date('d-m-Y - h:i:s') }}
                    </span>
                </div>
                
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 items-center text-center">
                    <div class="py-3 sm:py-5 flex flex-col sm:px-6">
                        <span class="text-sm font-bold text-gray-500">
                            {{ __('Cliente:') }}
                        </span>

                        <span class="border-none text-center mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2 disabled:opacity-75">
                            {{ $cliente_ci }}
                        </span>
                    </div>
                    <div class="py-3 sm:py-5 flex flex-col sm:px-6">
                        <span class="text-sm font-bold text-gray-500">
                            {{ __('Servicio:') }}
                        </span>
                        
                        <span name="cod_servicio_nombre" wire:model="cod_servicio_nombre" class="border-none text-center mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2 disabled:opacity-75">
                            {{ $cod_servicio_nombre }}
                        </span>
                    </div>
                    <div class="py-3 sm:py-5 flex flex-col sm:px-6">
                        <span class="text-sm font-bold text-gray-500">
                            {{ __('Atención:') }}
                        </span>
                        <span name="cod_servicio_atencion" wire:model="cod_servicio_atencion" class="border-none text-center mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2 disabled:opacity-75">
                            {{ $cod_servicio_atencion }}
                        </span>
                    </div>
                    <div class="py-3 sm:py-5 flex flex-col sm:px-6">
                        <span class="text-sm font-bold text-gray-500">
                            {{ __('Regional/agencia:') }}
                        </span>
                        <span name="cod_servicio_atencion" wire:model="cod_servicio_atencion" class="border-none text-center mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2 disabled:opacity-75">
                            {{ $datoRegionalUsuario = Auth::user()->departamento_id}}
                        </span>
                    </div>
                </div>
            </div>

            <div class="px-4 py-5 sm:px-6 flex flex-row justify-center items-center">
                <div class="break-words text-center text-sm font-medium text-gray-500">
                    <span>Por favor guarde su ticket</span> 
                </div>
            </div>
        </div>
        
    </div>

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 pb-8">
        <div class="flex flex-row items-center justify-center gap-3 mt-4 text-gray-500 leading-relaxed">

            @if($step > 0 && $step<=3)
                <x-button-white type="button" wire:click="decreaseStep" class="justify-center hover:bg-gray-400 active:bg-gray-400 focus:bg-gray-400">
                    <div class="text-3xl">Anterior</div>
                </x-button-white>
            @endif

            @if($step <= 3)
                <x-button-white type="button" wire:click="saveTURNO({{ $datoRegionalUsuario }})" class="justify-center hover:bg-green-400 active:bg-green-400 focus:bg-green-400">
                    <div class="text-3xl">Siguiente</div>
                </x-button-white>
            @endif

        </div>
    </div>

</div>