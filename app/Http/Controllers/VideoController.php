<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:video.index')->only('index');
        $this->middleware('can:video.create')->only('create');
        $this->middleware('can:video.store')->only('store');
        $this->middleware('can:video.show')->only('show');
        $this->middleware('can:video.edit')->only('edit');
        $this->middleware('can:video.update')->only('update');
        $this->middleware('can:video.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::orderBy('id', 'desc')->paginate();
        return view('video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('video.create', [
            'video' => new Video
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideo $request)
    {

        $titulo = $request->input('titulo_video');
        $ruta = $request->file('ruta_video');
        $descripcion = $request->input('descripcion_video');

        $IdUsuario = Auth::user()->id;

        $video = new Video();
        $video->titulo_video = $titulo;
        $video->descripcion_video = $descripcion;
        $video->user_id = $IdUsuario;

        //subir video y guardado
        if ($ruta) {

            $video_path_name = time() . '-' . $ruta->getClientOriginalName();

            //Guardar en la carpeta videos en storage
            Storage::disk('public')->put($video_path_name, File::get($ruta));

            $video->ruta_video = $video_path_name;
        }

        $video->save();

        return redirect()->route('video.create')->with(['message' => 'Video Registrado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        Storage::disk('public')->delete($video->ruta_video);
        return redirect()->route('video.index')
            ->with('message', 'Video eliminado satisfactoriamente');
    }
}
