@csrf
<div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    <div class="grid grid-cols-6 gap-6">
        <!-- item 1 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Título del video
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="titulo_video" type="text" value="{{ old('titulo_video', $video->titulo_video) }}">
            
            @error('titulo_video')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 2 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Descripción del video
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="descripcion_video" type="text" value="{{ old('descripcion_video', $video->descripcion_video) }}">
        
            @error('descripcion_video')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 3 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Subir video
            </label>
            <input type="file" accept="video/*" name="ruta_video" class="cursor-pointer inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md text-xs text-gray-700  tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 mr-2 file:bg-transparent file:uppercase file:border-none file:font-semibold file:text-gray-700" />
            @error('ruta_video')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>  
    </div>
</div>

<div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
    
    @if (session('message'))
        <x-action-save-update />
    @endif

    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        {{ $btnTexto }}
    </button>
</div>