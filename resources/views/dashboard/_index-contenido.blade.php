<div class="bg-white border-b border-gray-200">

    <!-- Dashboard admin -->
    {{--@if (Auth::user()->hasRole('Admin'))
        <div class="grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
            dashboard admin
        </div>
    @endif--}}

    <!-- Dashboard supervisor -->
    @if (Auth::user()->hasRole(['Supervisor', 'Admin']))
        <div class="grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
            @livewire('supervisor')
        </div>
    @endif

    <!-- Dashboard atencion -->
    @if (Auth::user()->hasRole('Atencion'))
        <div class="grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
            @livewire('atencion-cajas')
        </div>
    @endif

    <!-- Dashboard asistente -->
    @if (Auth::user()->hasRole('Asistente'))
        <div class="grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
            <div>
                <a href="{{ route('turno.pantalla') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2">
                    Ver pantalla
                </a>
                <a href="{{ route('turno.solicita') }}" target="_blank" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors bg-white border rounded-md hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-neutral-200/60 focus:ring-offset-2">
                    Solicita turno
                </a>
            </div>
        </div>
    @endif
    
                
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div class="text-sm text-gray-500">Sistema desarrollado por la EEC-GNV - 2023  
         {{--Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
    </div>
</div>