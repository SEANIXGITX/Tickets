<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDepartamento;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:departamento.index')->only('index');
        $this->middleware('can:departamento.create')->only('create');
        $this->middleware('can:departamento.store')->only('store');
        $this->middleware('can:departamento.show')->only('show');
        $this->middleware('can:departamento.edit')->only('edit');
        $this->middleware('can:departamento.update')->only('update');
        $this->middleware('can:departamento.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = Departamento::orderBy('id', 'desc')->paginate();
        return view('departamento.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departamento.create', [
            'departamento' => new Departamento()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateDepartamento $request)
    {
        $nombre = $request->input('nombre_departamento');
        $sigla = $request->input('sigla_departamento');
        $descripcion = $request->input('descripcion_departamento');

        $departamento = new Departamento();
        $departamento->nombre_departamento = $nombre;
        $departamento->sigla_departamento = $sigla;
        $departamento->descripcion_departamento = $descripcion;

        $departamento->save();

        return redirect()->route('departamento.create')->with(['message' => 'Departamento Registrado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $departamento)
    {
        return view('departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateDepartamento $request, Departamento $departamento)
    {
        $nombre = $request->input('nombre_departamento');
        $sigla = $request->input('sigla_departamento');
        $descripcion = $request->input('descripcion_departamento');

        $departamento->nombre_departamento = $nombre;
        $departamento->sigla_departamento = $sigla;
        $departamento->descripcion_departamento = $descripcion;

        $departamento->update();

        return view('departamento.edit', compact('departamento'))->with(['message' => 'Regional Actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamento.index')
        ->with('message', 'Regional eliminado satisfactoriamente');
    }
}
