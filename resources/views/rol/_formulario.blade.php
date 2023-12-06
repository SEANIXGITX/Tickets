@csrf
<div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    <div class="grid grid-cols-6 gap-6">
        <!-- item 1 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Nombre del rol
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="name" type="text" value="{{ old('name', $role->name) }}">
            
            @error('name')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <!-- item 2 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Permisos
            </label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                @foreach ($permissions as $permission)
                    <div>
                        <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block" name="permission[]"  type="checkbox" value="{{ old('permission[]', $permission->id) }}" {{ $role->permissions->pluck('id')->contains($permission->id) ? 'checked' : '' }}>{{ $permission->name }}
                    </div>
                @endforeach
            </div>
            @error('permission')
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