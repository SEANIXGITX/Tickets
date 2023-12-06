<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="overflow-y-auto relative sm:rounded-lg">
            <h2 class="bg-gray-50 px-6 py-3 text-gray-700 font-bold text-center uppercase">En Espera</h2>
            @if ( $turnoListaEnEspera != '' || $turnoListaEnEspera == NULL)
                <table class="w-full text-sm text-left text-gray-500">
                    
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Código</th>
                            <th scope="col" class="px-6 py-3">Atención</th>
                            {{-- <thscope="col"class="px-6py-3w-4text-center">Ver</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                            
                        @foreach ($turnoListaEnEspera as $listaEnEspera)
                            <tr class="bg-white border-b hover:bg-gray-50" wire:key="listaEnEspera-{{ $listaEnEspera->id  }}">
                                <td class="px-6 py-4">{{ $listaEnEspera->codigo_turno }}</td>
                                <td class="px-6 py-4">
                                    @if ($listaEnEspera->tipo_turno == 1)
                                        {{ __('Preferencial') }}
                                    @else
                                        {{ __('Normal') }}
                                    @endif
                                </td>
                                {{--<td class="px-6 py-4">
                                    @if ($loop->first)
                                        <button type="button" wire:click="tarjeta({{ $listaEnEspera->id }})" class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-50 focus:bg-gray-50 active:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <x-iconos.svg-eye />
                                        </button> 
                                    @endif
                                </td>--}}
                            </tr>
                        @endforeach
                                                
                    </tbody>
                </table>
            @else
                <span class="py-2 text-gray-500 flex flex-row items-center justify-center text-sm font-light">{{ __('No hay Clientes en espera actualice la página...') }}</span>    
            @endif
        </div>
        <div class="overflow-y-auto relative sm:rounded-lg">
            <h2 class="bg-gray-50 px-6 py-3 text-gray-700 font-bold text-center uppercase">Llamando</h2>
            @if ( $turnoListaLlamando != '' || $turnoListaLlamando == NULL)
                <table class="w-full text-sm text-left text-gray-500">
                    
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Código</th>
                            <th scope="col" class="px-6 py-3">Atención</th>
                            {{-- <thscope="col"class="px-6py-3w-4text-center">Ver</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                            
                        @foreach ($turnoListaLlamando as $listaLlamando)
                            <tr class="bg-white border-b hover:bg-gray-50" wire:key="listaLlamando-{{ $listaLlamando->id  }}">
                                <td class="px-6 py-4">{{ $listaLlamando->codigo_turno }}</td>
                                <td class="px-6 py-4">
                                    @if ($listaLlamando->tipo_turno == 1)
                                        {{ __('Preferencial') }}
                                    @else
                                        {{ __('Normal') }}
                                    @endif
                                </td>
                                {{--<td class="px-6 py-4">
                                    @if ($loop->first)
                                        <button type="button" wire:click="tarjeta({{ $listaEnEspera->id }})" class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-50 focus:bg-gray-50 active:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <x-iconos.svg-eye />
                                        </button> 
                                    @endif
                                </td>--}}
                            </tr>
                        @endforeach
                                                
                    </tbody>
                </table>
            @else
                <span class="py-2 text-gray-500 flex flex-row items-center justify-center text-sm font-light">{{ __('No hay Clientes en espera actualice la página...') }}</span>    
            @endif
        </div>
        <div class="overflow-y-auto relative sm:rounded-lg">
            <h2 class="bg-gray-50 px-6 py-3 text-gray-700 font-bold text-center uppercase">Atendiendo</h2>
            @if ( $turnoListaAtendiendo != '' || $turnoListaAtendiendo == NULL)
                <table class="w-full text-sm text-left text-gray-500">
                    
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Código</th>
                            <th scope="col" class="px-6 py-3">Atención</th>
                            {{-- <thscope="col"class="px-6py-3w-4text-center">Ver</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                            
                        @foreach ($turnoListaAtendiendo as $listaAtendiendo)
                            <tr class="bg-white border-b hover:bg-gray-50" wire:key="listaAtendiendota->id  }}">
                                <td class="px-6 py-4">{{ $listaAtendiendo->codigo_turno }}</td>
                                <td class="px-6 py-4">
                                    @if ($listaAtendiendo->tipo_turno == 1)
                                        {{ __('Preferencial') }}
                                    @else
                                        {{ __('Normal') }}
                                    @endif
                                </td>
                                {{--<td class="px-6 py-4">
                                    @if ($loop->first)
                                        <button type="button" wire:click="tarjeta({{ $listaEnEspera->id }})" class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-50 focus:bg-gray-50 active:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <x-iconos.svg-eye />
                                        </button> 
                                    @endif
                                </td>--}}
                            </tr>
                        @endforeach
                                                
                    </tbody>
                </table>
            @else
                <span class="py-2 text-gray-500 flex flex-row items-center justify-center text-sm font-light">{{ __('No hay Clientes en espera actualice la página...') }}</span>    
            @endif
        </div>
        <div class="overflow-y-auto relative sm:rounded-lg">
            <h2 class="bg-gray-50 px-6 py-3 text-gray-700 font-bold text-center uppercase">Atendido</h2>
            @if ( $turnoListaAtendido != '' || $turnoListaAtendido == NULL)
                <table class="w-full text-sm text-left text-gray-500">
                    
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Código</th>
                            <th scope="col" class="px-6 py-3">Atención</th>
                            {{-- <thscope="col"class="px-6py-3w-4text-center">Ver</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                            
                        @foreach ($turnoListaAtendido as $listaAtendido)
                            <tr class="bg-white border-b hover:bg-gray-50" wire:key="listaAtendido->id  }}">
                                <td class="px-6 py-4">{{ $listaAtendido->codigo_turno }}</td>
                                <td class="px-6 py-4">
                                    @if ($listaAtendido->tipo_turno == 1)
                                        {{ __('Preferencial') }}
                                    @else
                                        {{ __('Normal') }}
                                    @endif
                                </td>
                                {{--<td class="px-6 py-4">
                                    @if ($loop->first)
                                        <button type="button" wire:click="tarjeta({{ $listaEnEspera->id }})" class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-50 focus:bg-gray-50 active:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <x-iconos.svg-eye />
                                        </button> 
                                    @endif
                                </td>--}}
                            </tr>
                        @endforeach
                                                
                    </tbody>
                </table>
            @else
                <span class="py-2 text-gray-500 flex flex-row items-center justify-center text-sm font-light">{{ __('No hay Clientes en espera actualice la página...') }}</span>    
            @endif
        </div>
        <div class="overflow-y-auto relative sm:rounded-lg">
            <h2 class="bg-gray-50 px-6 py-3 text-gray-700 font-bold text-center uppercase">Cancelado</h2>
            @if ( $turnoListaCancelado != '' || $turnoListaCancelado == NULL)
                <table class="w-full text-sm text-left text-gray-500">
                    
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Código</th>
                            <th scope="col" class="px-6 py-3">Atención</th>
                            {{-- <thscope="col"class="px-6py-3w-4text-center">Ver</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                            
                        @foreach ($turnoListaCancelado as $listaCancelado)
                            <tr class="bg-white border-b hover:bg-gray-50" wire:key="listaCancelado->id  }}">
                                <td class="px-6 py-4">{{ $listaCancelado->codigo_turno }}</td>
                                <td class="px-6 py-4">
                                    @if ($listaCancelado->tipo_turno == 1)
                                        {{ __('Preferencial') }}
                                    @else
                                        {{ __('Normal') }}
                                    @endif
                                </td>
                                {{--<td class="px-6 py-4">
                                    @if ($loop->first)
                                        <button type="button" wire:click="tarjeta({{ $listaEnEspera->id }})" class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-50 focus:bg-gray-50 active:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            <x-iconos.svg-eye />
                                        </button> 
                                    @endif
                                </td>--}}
                            </tr>
                        @endforeach
                                                
                    </tbody>
                </table>
            @else
                <span class="py-2 text-gray-500 flex flex-row items-center justify-center text-sm font-light">{{ __('No hay Clientes en espera actualice la página...') }}</span>    
            @endif
        </div>
        <div class="overflow-y-auto relative sm:rounded-lg">
            <div>
                <a wire:click="actualizar()" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2">
                    Actualizar
                </a>
                <a href="{{ route('turno.pantalla') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2">
                    Ver pantalla
                </a>
                <a href="{{ route('turno.solicita') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2">
                    Solicita turno
                </a>
            </div>
        </div>
    </div>
</div>
