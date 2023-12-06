<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAgencia;
use App\Models\Agencia;
use App\Models\Departamento;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:agencia.index')->only('index');
        $this->middleware('can:agencia.create')->only('create');
        $this->middleware('can:agencia.store')->only('store');
        $this->middleware('can:agencia.show')->only('show');
        $this->middleware('can:agencia.edit')->only('edit');
        $this->middleware('can:agencia.update')->only('update');
        $this->middleware('can:agencia.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencias = Agencia::orderBy('id', 'desc')->paginate();
        return view('agencia.index', compact('agencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::All();
        $data = array('lista_departamentos' => $departamentos);
        return view('agencia.create', ['agencia' => new Agencia()], $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateAgencia $request)
    {
        $nombre = $request->input('nombre_agencia');
        $sigla = $request->input('sigla_agencia');
        $descripcion = $request->input('descripcion_agencia');
        $depto_id = $request->input('departamento_id');

        $agencia = new Agencia();
        $agencia->nombre_agencia = $nombre;
        $agencia->sigla_agencia = $sigla;
        $agencia->descripcion_agencia = $descripcion;
        $agencia->departamento_id = $depto_id;

        $agencia->save();

        return redirect()->route('agencia.edit', $agencia->id)->with(['message' => 'Agencia Registrado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Agencia $agencia)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agencia $agencia)
    {
        $departamentos = Departamento::All();
        $data = array('lista_departamentos' => $departamentos);

        return view('agencia.edit', compact('agencia'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateAgencia $request, Agencia $agencia)
    {
        $nombre = $request->input('nombre_agencia');
        $sigla = $request->input('sigla_agencia');
        $descripcion = $request->input('descripcion_agencia');
        $depto_id = $request->input('departamento_id');

        $agencia->nombre_agencia = $nombre;
        $agencia->sigla_agencia = $sigla;
        $agencia->descripcion_agencia = $descripcion;
        $agencia->departamento_id = $depto_id;

        $agencia->update();

        return redirect()->route('agencia.edit', $agencia->id)->with(['message' => 'Agencia Actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agencia $agencia)
    {
        $agencia->delete();

        return redirect()->route('agencia.index')
        ->with('message', 'Agencia eliminado satisfactoriamente');
    }
}
