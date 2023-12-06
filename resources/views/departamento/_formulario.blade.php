@csrf
<div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    <div class="grid grid-cols-6 gap-6">
        <!-- item 1 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Nombre de la regional
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="nombre_departamento" type="text" value="{{ old('nombre_departamento', $departamento->nombre_departamento) }}">

            @error('nombre_departamento')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 2 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Sigla de la regional
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="sigla_departamento" type="text" value="{{ old('sigla_departamento', $departamento->sigla_departamento) }}">

            @error('sigla_departamento')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 3 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Descripción de la regional
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="descripcion_departamento" type="text" value="{{ old('descripcion_departamento', $departamento->descripcion_departamento) }}">
        
            @error('descripcion_departamento')
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
