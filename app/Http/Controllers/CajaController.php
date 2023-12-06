<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCaja;
use App\Models\Agencia;
use App\Models\Caja;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;

class CajaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:caja.index')->only('index');
        $this->middleware('can:caja.create')->only('create');
        $this->middleware('can:caja.store')->only('store');
        $this->middleware('can:caja.show')->only('show');
        $this->middleware('can:caja.edit')->only('edit');
        $this->middleware('can:caja.update')->only('update');
        $this->middleware('can:caja.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cajas = Caja::orderBy('id', 'desc')->paginate();
        return view('caja.index', compact('cajas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agencias = Agencia::all();
        $usuarios = User::all();
        $servicios = Servicio::all();
        return view('caja.create', [
            'caja' => new Caja()
        ], compact('agencias', 'usuarios', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCaja $request)
    {
        $nombre = $request->input('nombre_caja');
        $codigo = $request->input('codigo_caja');
        $descripcion = $request->input('descripcion_caja');
        $agencia = $request->input('agencia_id');
        $usuario = $request->input('usuario_id');
        $servicio = $request->input('servicio_id');

        $caja = new Caja();
        $caja->nombre_caja = $nombre;
        $caja->codigo_caja = $codigo;
        $caja->descripcion_caja = $descripcion;
        $caja->agencia_id = $agencia;
        $caja->user_id = $usuario;
        $caja->servicio_id = $servicio;

        $caja->save();

        return redirect()->route('caja.create')->with(['message' => 'Caja Registrado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Caja $caja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caja $caja)
    {
        $agencias = Agencia::all();
        $usuarios = User::all();
        $servicios = Servicio::all();

        return view('caja.edit', compact('caja', 'agencias', 'usuarios', 'servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCaja $request, Caja $caja)
    {
        $agencias = Agencia::all();
        $usuarios = User::all();
        $servicios = Servicio::all();

        $nombre = $request->input('nombre_caja');
        $codigo = $request->input('codigo_caja');
        $descripcion = $request->input('descripcion_caja');
        $agencia = $request->input('agencia_id');
        $usuario = $request->input('usuario_id');
        $servicio = $request->input('servicio_id');

        $caja->nombre_caja = $nombre;
        $caja->codigo_caja = $codigo;
        $caja->descripcion_caja = $descripcion;
        $caja->agencia_id = $agencia;
        $caja->user_id = $usuario;
        $caja->servicio_id = $servicio;

        $caja->update();

        return view('caja.edit', compact('caja', 'agencias', 'usuarios', 'servicios'))->with(['message' => 'Caja Actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caja $caja)
    {
        $caja->delete();
        return redirect()->route('caja.index')
        ->with('message', 'Caja eliminado satisfactoriamente');
    }
}
