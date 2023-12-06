<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:rol.index')->only('index');
        $this->middleware('can:rol.create')->only('create');
        $this->middleware('can:rol.store')->only('store');
        $this->middleware('can:rol.show')->only('show');
        $this->middleware('can:rol.edit')->only('edit');
        $this->middleware('can:rol.update')->only('update');
        $this->middleware('can:rol.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::orderBy('id', 'asc')->paginate();
        return view('rol.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('rol.create', [
            'role' => new Role()
        ], compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create($request->all());
        $role ->permissions()->sync($request->permission);

        return redirect()->route('rol.edit', $role)->with(['message' => 'Rol registrado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('rol.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role->update($request->all());
        $role->permissions()->sync($request->permission);

        return redirect()->route('rol.edit', $role)->with(['message' => 'Rol actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('rol.index')
        ->with(['message' => 'Rol eliminado satisfactoriamente']);
    }
}
