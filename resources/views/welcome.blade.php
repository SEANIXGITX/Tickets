<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                

                <div class="bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                        
                        <div>
                            <div class="flex items-center">
                                <div class="h-16 w-16 bg-indigo-50 flex items-center justify-center rounded-full">
                                    <x-iconos.svg-ticket />
                                </div>
                                <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                    <a href="{{ route('turno.solicita') }}">Solicitar turnos</a>
                                </h2>
                            </div>

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a neque a dolor lacinia interdum at eu lectus. In tincidunt felis id justo elementum, id dictum magna maximus. Ut lacus ex, maximus tristique pharetra rhoncus, egestas et arcu.
                            </p>

                            <p class="mt-4 text-sm">
                                <a href="{{ route('turno.solicita') }}" class="inline-flex items-center font-semibold text-indigo-700">
                                    Enlace

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                                        <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </p>
                        </div>

                        <div>
                            <div class="flex items-center">
                                <div class="h-16 w-16 bg-indigo-50 flex items-center justify-center rounded-full">
                                    <x-iconos.svg-tv />
                                </div>
                                <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                    <a href="{{ route('turno.pantalla') }}">Ver pantalla</a>
                                </h2>
                            </div>

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a neque a dolor lacinia interdum at eu lectus. In tincidunt felis id justo elementum, id dictum magna maximus. Ut lacus ex, maximus tristique pharetra rhoncus, egestas et arcu.
                            </p>

                            <p class="mt-4 text-sm">
                                <a href="{{ route('turno.pantalla') }}" class="inline-flex items-center font-semibold text-indigo-700">
                                    Enlace

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                                        <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </p>
                        </div>
                
                    </div>
                                
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        Desarrollado por EEC-GNV
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-guest-layout>