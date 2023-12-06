<div>
    
    <div class="col-span-6 sm:col-span-6">
        <label class="block font-medium text-sm text-gray-700" for="departamentoId">
            Seleccione la regional a la que corresponda el usuario
        </label>
        <select name="departamentoId" id="departamentoId" wire:model.live="departamentoId" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" >
            @if ($user->departamento_id != '')
                @foreach($departamentos as $departamento)
                    <option value={{ $departamento->id }} {{ $departamento->id == old('departamentoId', $user->departamento_id) ? 'selected' : '' }}>{{ $departamento->nombre_departamento }}</option>
                @endforeach 
                <option value=''>Seleccione una regional</option>
            @else
                <option value=''>Seleccione una regional</option>
                @foreach($departamentos as $departamento)
                    <option value={{ $departamento->id }}>{{ $departamento->nombre_departamento }}</option>
                @endforeach   
            @endif     
        </select>

        @error('departamentoId')
            <div class="text-xs italic text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-span-6 sm:col-span-6 mt-6">
        <label class="block font-medium text-sm text-gray-700" for="agenciaId">
            Seleccione la agencia a la que corresponda el usuario
        </label>
        <select name="agenciaId" id="agenciaId" wire:model.live="agenciaId" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" >
            @if ($user->agencia_id != '')
                @foreach($agencias as $agencia)
                    <option value={{ $agencia->id }} {{ $agencia->id == old('agenciaId', $user->agencia_id) ? 'selected' : '' }}>{{ $agencia->nombre_agencia }}</option>
                @endforeach 
                <option value=''>Seleccione una agencia</option>
            @else
                <option value=''>Seleccione una agencia</option>
                @foreach($agencias as $agencia)
                    <option value={{ $agencia->id }}>{{ $agencia->nombre_agencia }}</option>
                @endforeach   
            @endif  
        </select>

        @error('agenciaId')
            <div class="text-xs italic text-red-500">
                {{ $message }}
            </div>
        @enderror
    </div>

</div>


