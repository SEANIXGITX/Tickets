<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-nowarp justify-between">
            <h2 class="flex items-center font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Solicitar turno') }}
            </h2>
            <a href="" class ="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Nuevo turno
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                @livewire('solicitud')
            </div>
        </div>
    </div>
</x-app-layout>