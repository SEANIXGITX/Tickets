<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Turno;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TurnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:turno.index')->only('index');
        $this->middleware('can:turno.create')->only('create');
        $this->middleware('can:turno.store')->only('store');
        $this->middleware('can:turno.show')->only('show');
        $this->middleware('can:turno.edit')->only('edit');
        $this->middleware('can:turno.update')->only('update');
        $this->middleware('can:turno.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     
     */
    public function index()
    {
        $turnos = Turno::orderBy('id', 'desc')->paginate();
        return view('turno.index', compact('turnos'));
    }

    /**
     * Display a listing of the resource.
     */
    public function indexsolicita()
    {
        //return view('solicita.index');
    }

    public function indexturnosolicita()
    {
        return view('solicita.turno');
    }

    public function indexturnopantalla()
    {
        $videos = Video::all();
        return view('solicita.pantalla', compact('videos'));
    }

    public function indexturnopantalladato($envioID)
    {
        $videos = Video::all();
        return view('solicita.pantalla', compact('videos','envioID'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('turno.create', [
            'turno' => new Turno()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Turno $turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turno $turno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Turno $turno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Turno $turno)
    {
        //
    }
}
