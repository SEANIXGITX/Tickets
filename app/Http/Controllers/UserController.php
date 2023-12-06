<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUser;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Models\Agencia;
use App\Models\Departamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:usuario.index')->only('index');
        $this->middleware('can:usuario.create')->only('create');
        $this->middleware('can:usuario.store')->only('store');
        $this->middleware('can:usuario.show')->only('show');
        $this->middleware('can:usuario.edit')->only('edit');
        $this->middleware('can:usuario.update')->only('update');
        $this->middleware('can:usuario.store')->only('store');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->paginate();
        return view('usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::All();
        $data = array('lista_departamentos' => $departamentos);

        $agencias = Agencia::All();
        $data1 = array('lista_agencias' => $agencias);

        return view('usuario.create', [ 'user' => new User() ], $data, $data1);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUser $request)
    {
        $nombre = $request->input('name');
        $correo = $request->input('email');
        $carnet = $request->input('ci');
        $contrasena = Hash::make($request->input('password'));
        
        $usuario = new User();
        $usuario->name = $nombre;
        $usuario->email = $correo;
        $usuario->ci = $carnet;
        $usuario->password = $contrasena;
        
        $usuario->save();

        return redirect()->route('usuario.edit', $usuario->id)->with(['message' => 'Usuario Registrado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $departamentos = Departamento::all();
        
        $roles = Role::all();

        return view('usuario.edit', compact('user', 'roles'), compact('departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUser $request, User $user)
    {
        $nombre = $request->input('name');
        $correo = $request->input('email');
        $carnet = $request->input('ci');
        $contrasena = $request->input('password');
        $roles = $request->input('roles', []);
               
        $departamentoID = $request->input('departamentoId');
        $agenciaID = $request->input('agenciaId');

        //$user->syncRoles($roles);
        
        
        $user->name = $nombre;
        $user->email = $correo;
        $user->ci = $carnet;
            if ($contrasena != '') {
                $user->password = Hash::make($contrasena);
            }
        $user->departamento_id = $departamentoID;
        $user->agencia_id = $agenciaID;

        $user->update();

        DB::table('model_has_roles')->where('model_id', $user->id)->delete();
        $user->assignRole($request->input('roles'));

        //return view('usuario.edit', compact('user', 'agencias', 'departamentos'));
        return redirect()->route('usuario.edit', $user)->with(['message' => 'Usuario Actualizado']);
    }

    /*public function actualizaRol(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('usuario.edit', $user->id)->with(['messageRol' => 'Roles Actualizado']);
    }*/

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('usuario.index')
        ->with('messasge', 'Usuario eliminado satisfactoriamente');
    }
}
