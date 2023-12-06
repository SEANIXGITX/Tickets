<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateServicio;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:servicio.index')->only('index');
        $this->middleware('can:servicio.create')->only('create');
        $this->middleware('can:servicio.store')->only('store');
        $this->middleware('can:servicio.show')->only('show');
        $this->middleware('can:servicio.edit')->only('edit');
        $this->middleware('can:servicio.update')->only('update');
        $this->middleware('can:servicio.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::orderBy('id', 'desc')->paginate();
        return view('servicio.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicio.create', [
            'servicio' => new Servicio()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateServicio $request)
    {
        $nombre = $request->input('nombre_servicio');
        $codigo = $request->input('codigo_servicio');
        $descripcion = $request->input('descripcion_servicio');
        $estado = $request->input('estado_servicio');

        $servicio = new Servicio();
        $servicio->nombre_servicio = $nombre;
        $servicio->codigo_servicio = $codigo;
        $servicio->descripcion_servicio = $descripcion;
        $servicio->estado_servicio = $estado;

        $servicio->save();

        return redirect()->route('servicio.create')->with(['message' => 'Servicio Registrado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        return view('servicio.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateServicio $request, Servicio $servicio)
    {
        $nombre = $request->input('nombre_servicio');
        $codigo = $request->input('codigo_servicio');
        $descripcion = $request->input('descripcion_servicio');
        $estado = $request->input('estado_servicio');

        $servicio->nombre_servicio = $nombre;
        $servicio->codigo_servicio = $codigo;
        $servicio->descripcion_servicio = $descripcion;
        $servicio->estado_servicio = $estado;

        $servicio->update();

        //return view('servicio.edit', compact('servicio'))->with(['message' => 'Servicio Actualizado']);
        return redirect()->route('servicio.edit', $servicio->id)->with(['message' => 'Servicio Actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('servicio.index')
        ->with(['message' => 'Servicio eliminado satisfactoriamente']);
    }
}
