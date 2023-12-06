@csrf
<div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    <div class="grid grid-cols-6 gap-6">
        <!-- item 1 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Nombre de la agencia
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="nombre_agencia" type="text" value="{{ old('nombre_agencia', $agencia->nombre_agencia) }}">

            @error('nombre_agencia')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 2 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Sigla de la agencia
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="sigla_agencia" type="text" value="{{ old('sigla_agencia', $agencia->sigla_agencia) }}">

            @error('sigla_agencia')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 3 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Descripción de la agencia
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="descripcion_agencia" type="text" value="{{ old('descripcion_agencia', $agencia->descripcion_agencia) }}">
        
            @error('descripcion_agencia')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- item 4 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Seleccione la Regional a la que corresponda la agencia
            </label>
            
            <select name='departamento_id' class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                <option value="">seleccione una agencia...</option>
                @foreach ($lista_departamentos as $lista)
                    <option value="{{ $lista->id }}" {{ $lista->id == old('departamento_id', $agencia->departamento_id) ? 'selected' : '' }}>{{ $lista->nombre_departamento }}</option>
                @endforeach
            </select>
        
            @error('departamento_id')
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
