<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:cliente.index')->only('index');
        $this->middleware('can:cliente.create')->only('create');
        $this->middleware('can:cliente.store')->only('store');
        $this->middleware('can:cliente.show')->only('show');
        $this->middleware('can:cliente.edit')->only('edit');
        $this->middleware('can:cliente.update')->only('update');
        $this->middleware('can:cliente.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->paginate();
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create', [
            'cliente' => new Cliente()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ci = $request->input('ci_cliente');
        //$complemento = $request->input('complemento_cliente');

        $cliente = new Cliente();
        $cliente->ci_cliente = $ci;
        //$cliente->ci_complemento_cliente = $complemento;
        
        $cliente->save();

        return redirect()->route('cliente.create')->with(['message' => 'Cliente Registrado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $ci = $request->input('ci_cliente');
        //$complemento = $request->input('complemento_cliente');

        $cliente->ci_cliente = $ci;
        //$cliente->ci_complemento_cliente = $complemento;

        $cliente->update();

        return view('cliente.edit', compact('cliente'))->with(['message' => 'Cliente Actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index')
        ->with('message', 'Cliente eliminado satisfactoriamente');
    }
}
