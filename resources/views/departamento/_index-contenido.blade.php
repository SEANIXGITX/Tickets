<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <!--table list-->
    <div class="overflow-y-auto relative sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Sigla</th>
                    <th scope="col" class="px-6 py-3">Descripción</th>
                    <th scope="col" class="px-6 py-3 text-center w-44">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departamentos as $depto)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{$depto->nombre_departamento}}</td>
                        <td class="px-6 py-4">{{$depto->sigla_departamento}}</td>
                        <td class="px-6 py-4">{{$depto->descripcion_departamento}}</td>
                        <td class="w-44 flex flex-nowrap gap-2 sm:flex-wrap items-center justify-center px-6 py-4 space-x-3">
                            
                            @can('departamento.edit')
                                <a href="{{ route('departamento.edit', $depto) }}" method="POST" class="p-2">
                                    <x-iconos.svg-edit />
                                </a>
                            @endcan

                            @can('departamento.destroy')
                                <form class="p-2" action="{{ route('departamento.destroy', $depto) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit">
                                            <x-iconos.svg-delete />
                                        </button>
                                </form>
                            @endcan
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!--end table list-->
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        {{$departamentos->links()}}
    </div>
</div>