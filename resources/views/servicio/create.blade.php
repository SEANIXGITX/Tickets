<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-nowarp justify-between">
            <h2 class="flex items-center font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Crear nuevo servicio') }}
            </h2>
            <a href="{{ route('servicio.index') }}" class ="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Volver a Servicios
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div wire:snapshot="{&quot;data&quot;:{&quot;state&quot;:[{&quot;email&quot;:&quot;luis.miguel.mishy@gmail.com&quot;,&quot;id&quot;:1,&quot;name&quot;:&quot;Luis Miguel Cauna&quot;,&quot;email_verified_at&quot;:null,&quot;two_factor_confirmed_at&quot;:null,&quot;current_team_id&quot;:null,&quot;profile_photo_path&quot;:null,&quot;created_at&quot;:&quot;2023-10-10T00:29:47.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-10-10T00:30:31.000000Z&quot;,&quot;profile_photo_url&quot;:&quot;https:\/\/ui-avatars.com\/api\/?name=L+M+C&amp;color=7F9CF5&amp;background=EBF4FF&quot;},{&quot;s&quot;:&quot;arr&quot;}],&quot;photo&quot;:null,&quot;verificationLinkSent&quot;:false},&quot;memo&quot;:{&quot;id&quot;:&quot;6aRqNSaYMloOcAez2MTL&quot;,&quot;name&quot;:&quot;profile.update-profile-information-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;d4c46d640cbb3ceb502e980af3de3aa9205812a94510cb2abfe03a529a0a63d4&quot;}" wire:effects="[]" wire:id="6aRqNSaYMloOcAez2MTL" class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">Información del servicio</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Rellene todos los campos para la información del servicio.
                        </p>
                    </div>
                <div class="px-4 sm:px-0">
            </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('servicio.store') }}" method="POST">
                @include('servicio._formulario', ['btnTexto' => 'Guardar'])
            </form>
        </div>
    </div>

    <div class="hidden sm:block">
        <div class="py-8">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
</x-app-layout>
            
                            