@csrf
<div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    <div class="grid grid-cols-6 gap-6">
        <!-- item 1 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Nombre de la caja
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="nombre_caja" type="text" value="{{ old('nombre_caja', $caja->nombre_caja) }}">

            @error('nombre_caja')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 2 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Código de la caja
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="codigo_caja" type="text" value="{{ old('codigo_caja', $caja->codigo_caja) }}">

            @error('codigo_caja')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 3 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Descripción de la caja
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="descripcion_caja" type="text" value="{{ old('descripcion_caja', $caja->descripcion_caja) }}">
        
            @error('descripcion_caja')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror      
        </div>

        <!-- item 4 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Seleccione la agencia
            </label>
            
            <select name='agencia_id' class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                <option value="">seleccione una agencia...</option>
                @foreach ($agencias as $agencia)
                    <option value="{{ $agencia->id }}" {{ $agencia->id == old('agencia_id', $agencia->id) ? 'selected' : '' }}>{{ $agencia->nombre_agencia }}</option>
                @endforeach
            </select>
        
            @error('agencia_id')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- item 5 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Seleccione usuario
            </label>
            
            <select name='usuario_id' class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                <option value="">seleccione un usuario...</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $usuario->id == old('usuario_id', $usuario->id) ? 'selected' : '' }}>{{ $usuario->name }}</option>
                @endforeach
            </select>
        
            @error('usuario_id')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- item 6 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Seleccione servicios
            </label>
            
            <select name='servicio_id' class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                <option value="">seleccione un servicio...</option>
                @foreach ($servicios as $servicio)
                    <option value="{{ $servicio->id }}" {{ $servicio->id == old('servicio_id', $servicio->id) ? 'selected' : '' }}>{{ $servicio->nombre_servicio }}</option>
                @endforeach
            </select>
        
            @error('servicio_id')
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
