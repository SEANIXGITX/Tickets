<x-pantalla-layout>
    
    
        <header class="relative flex items-end justify-center h-screen min-h-max overflow-hidden">
            
            <div class="relative w-screen z-30 text-5xl text-white bg-blue-500">
                <div class="grid grid-cols-4 text-center">
                    
                </div>
            </div>
            @if($videos)
                <video autoplay loop controls class="absolute z-10 w-screen min-w-full">
                    @foreach ($videos as $video )
                        <source src="{{  asset('storage/'.$video->ruta_video) }}" type="video/mp4">Your browser does not support the video tag.
                    @endforeach
                </video>
            @endif  
        </header>

    

</x-pantalla-layout>