@csrf
<div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    <div class="grid grid-cols-6 gap-6">
        <!-- item 1 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Nombre del servicio
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="nombre_servicio" type="text" value="{{ old('nombre_servicio', $servicio->nombre_servicio) }}">

            @error('nombre_servicio')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 2 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Código del servicio
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="codigo_servicio" type="text" value="{{ old('codigo_agencia', $servicio->codigo_servicio) }}">

            @error('codigo_servicio')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 3 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Descripción del servicio
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="descripcion_servicio" type="text" value="{{ old('descripcion_servicio', $servicio->descripcion_servicio) }}">
        
            @error('descripcion_servicio')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror      
        </div>
        <!-- item 4 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Estado del servicio
            </label>
            
            <select name='estado_servicio' class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                <option value="0" {{ old('departamento_id', $servicio->estado_servicio) == 0 ? 'selected' : '' }}>{{ __('Desactivado') }}</option>
                <option value="1" {{ old('departamento_id', $servicio->estado_servicio) == 1 ? 'selected' : '' }}>{{__('Activado')}}</option>
            </select>
        
            @error('estado_servicio')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror       
            
            <!--<div class="flex items-center">
                <label class="text-sm text-gray-500 mr-3 dark:text-gray-400">Desactivado</label>
                <input type="checkbox" value="{{ old('estado_servicio', $servicio->estado_servicio) == 1 ? "1" : "0" }}" {{  ($servicio->estado_servicio == 1 ? ' checked ' : '') }} class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-indigo-500 focus:ring-indigo-500 ring-offset-white focus:outline-none appearance-none before:inline-block before:w-6 before:h-6 before:bg-white before:translate-x-0 before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 checked:bg-none checked:bg-indigo-500 checked:before:bg-white checked:before:translate-x-full">
                <label class="text-sm text-gray-500 ml-3 dark:text-gray-400">Activo</label>
            </div>-->

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
