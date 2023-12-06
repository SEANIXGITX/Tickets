<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-nowarp justify-between">
            <h2 class="flex items-center font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar agencia') }}
            </h2>
            <a href="{{ route('agencia.index') }}" class ="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Volver a Agencias
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">

                        @include('agencia._informacion', [ 'titularAgencia' => 'Información de la agencia',
                                                        'descripcionAgencia' => 'Rellene y Modifique todos los campos para la información de la Agencia.' ])
                    </div>
                    
                    <div class="px-4 sm:px-0"></div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('agencia.update', $agencia) }}" method="POST">
                        @method('PUT')
                        @include('agencia._formulario', ['btnTexto' => 'Actualizar'])
                    </form>
                </div>
            </div>

            <x-section-border />
            
        </div>
    </div>

</x-app-layout>