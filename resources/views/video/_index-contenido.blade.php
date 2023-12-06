<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    
    <!--table list-->
    <div class="overflow-y-auto relative sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Titulo</th>
                    <th scope="col" class="px-6 py-3">Descripción</th>
                    <th scope="col" class="px-6 py-3">URL</th>
                    <th scope="col" class="px-6 py-3 text-center w-44">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $video)
                    <tr class="bg-white border-b hover:bg-gray-50 align-middle">
                        <td class="px-6 py-4">{{$video->titulo_video}}</td>
                        <td class="px-6 py-4">{{$video->descripcion_video}}</td>
                        <td class="px-6 py-4">{{$video->ruta_video}}</td>
                        <td class="w-44 flex flex-nowrap gap-2 sm:flex-wrap items-center justify-center px-6 py-4 space-x-3">
                            {{-- <a href="{{ route('video.show', $video) }}" class="p-2">
                                <x-iconos.svg-play />
                            </a>--}}
                            @can('video.destroy')
                                <form class="p-2" action="{{ route('video.destroy', $video) }}" method="POST">
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
        {{$videos->links()}}
    </div>
</div>