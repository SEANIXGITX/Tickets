<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <div class="overflow-y-auto relative sm:rounded-lg">
            <h2 class="bg-gray-50 px-6 py-3 text-gray-700 font-bold text-center uppercase">Llamados en espera</h2>
            
            @if ( $turnoLista != '' || $turnoLista == NULL)
                <table class="w-full text-sm text-left text-gray-500">
                    
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Código</th>
                            <th scope="col" class="px-6 py-3">Atención</th>
                            <th scope="col" class="px-6 py-3 w-4 text-center">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                        @foreach ($turnoLista as $lista)
                            <tr class="bg-white border-b hover:bg-gray-50" wire:key="lista-{{ $lista->id  }}">
                                <td class="px-6 py-4">{{ $lista->codigo_turno }}</td>
                                <td class="px-6 py-4">
                                    @if ($lista->tipo_turno == 1)
                                        {{ __('Preferencial') }}
                                    @else
                                        {{ __('Normal') }}
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($loop->first)
                                        <button type="button" wire:click="tarjeta({{ $lista->id }})" wire:click="$refresh" class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-50 focus:bg-gray-50 active:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <x-iconos.svg-eye />
                                        </button> 
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                                                
                    </tbody>
                </table>
            @else
                <span class="py-2 text-gray-500 flex flex-row items-center justify-center text-sm font-light">{{ __('No hay Clientes en espera actualice la página...') }}</span>    
            @endif

        </div>

        <div class="overflow-y-auto relative sm:rounded-lg">
            
            <h2 class="bg-gray-50 px-6 py-3 text-gray-700 text-center font-bold uppercase">Tarjeta Acciones | {{ Auth::user()->caja()->pluck('nombre_caja')->first() }} | {{ $nServicio = App\Models\Servicio::find(Auth::user()->caja()->pluck('servicio_id'))->pluck('nombre_servicio')->first() }}</h2>
            <div id="datos" class="flex flex-col">
                <div class="flex flex-row px-6 py-3">
                    <span>Cliente CI (Carnet): </span><p wire:model.live="clienteCI" class="pl-2 text-gray-500 text-light">{{ $clienteCI }}</p>
                </div>
                <div class="flex flex-row px-6 py-3">
                    <span>Código: </span><p wire:model.live="clienteCODIGO" class="pl-2 text-gray-500 text-light">{{ $clienteCODIGO }}</p>
                </div>
                <div class="flex flex-row px-6 py-3">
                    <span>Atención: </span><p wire:model.live="clienteATENCION" class="pl-2 text-gray-500 text-light">{{ $clienteATENCION }}</p>
                </div>
                <div class="flex flex-row px-6 py-3">
                    <span>Hora de ticket: </span><p wire:model.live="clienteFECHAHORA" class="pl-2 text-gray-500 text-light">{{ $clienteFECHAHORA }}</p>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8 p-6 lg:p-8">
                
                @if ($mostrarBOTONES)
                    <div class="flex flex-col justify-center items-center">
                        <x-iconos.svg-megaphone />
                        <button type="button" wire:click="llamada({{ $clienteLLAMADA }})" class="px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-300 focus:bg-gray-100 active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Llamar<br />Cliente
                        </button>    
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        @if ($mostrarBOTONiniciarATENCION)
                            <x-iconos.svg-play-circle />
                            <button type="button" wire:model.live="clienteINICIAR" wire:click.prevent="iniciar({{ $clienteINICIAR }})" class="px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-300 focus:bg-gray-100 active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Iniciar<br />Atención
                            </button>
                        @endif  
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        @if ($mostrarBOTONterminarATENCION)
                            <x-iconos.svg-stop-circle />
                            <button type="button" wire:model.live="clienteTERMINAR" wire:click="terminar({{ $clienteTERMINAR }})" class="px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-300 focus:bg-gray-100 active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Terminar<br />Atención
                            </button>
                        @endif
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <x-iconos.svg-close />
                        <button type="button" wire:model.live="clienteCANCELAR" wire:click="cancelar({{ $clienteCANCELAR }})" class="px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-300 focus:bg-gray-100 active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Cancelar<br />Atención
                        </button>
                    </div>
                @endif

            </div>
        </div>
    </div>

</div>
