@csrf
<div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
    <div class="grid grid-cols-6 gap-6">
        <!-- item 1 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="name">
                Nombre del usuario
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="name" type="text" value="{{ old('name', $user->name) }}">

            @error('name')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- item 2 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="email">
                Email del usuario
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="email" type="email" value="{{ old('email', $user->email) }}">

            @error('email')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- item 3 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="password">
                Contraseña del usuario
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="password" name="password" type="password" value="">

            @error('password')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- item 3 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700">
                Carnet de usuario
            </label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" name="ci" type="text" value="{{ old('ci', $user->ci) }}">

            @error('ci')
                <div class="text-xs italic text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <!-- item 4 -->
        <div class="col-span-6 sm:col-span-6">
            @livewire('regional-agencia', ['user' => $user])
        </div>

        <!-- item 3 -->
        <div class="col-span-6 sm:col-span-6">
            <label class="block font-medium text-sm text-gray-700" for="roles">
                Seleccione un Rol para el usuario
            </label>
            <select name="roles" id="roles" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" >
                
                @if ($user->roles()->pluck('id')->first() != '')   
                    @foreach($roles as $role)
                        <option value={{ $role->name }} {{ $role->id == old('roles', $user->roles()->pluck('id')->first()) ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach     
                    <option value=''>Seleccione un rol</option> 
                @else
                    <option value=''>Seleccione un rol</option> 
                    @foreach($roles as $role)
                        <option value={{ $role->name }}>{{ $role->name }}</option>
                    @endforeach 
                @endif 
            </select>

            @error('roles')
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
