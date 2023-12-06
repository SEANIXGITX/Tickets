<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\AgenciaController;
use App\Models\Agencia;
use App\Http\Controllers\DepartamentoController;
use App\Models\Departamento;
use App\Http\Controllers\ServicioController;
use App\Models\Servicio;
use App\Http\Controllers\CajaController;
use App\Models\Caja;
use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use App\Http\Controllers\TurnoController;
use App\Models\turno;
use App\Http\Controllers\VideoController;
use App\Livewire\AtencionCajas;
use App\Models\Video;

use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\RoleController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Ruta usuarios
Route::resource('usuario', UserController::class)->parameters(['usuario' => 'user'])->names('usuario');
/*Route::controller(UserController::class)->group(function () {
    route::patch('usuario/{usuario}', 'actualizaRol')->name('usuario.actualizaRol');
});*/

Route::get('notification', AtencionCajas::class);

//Ruta regionales
Route::resource('regional', DepartamentoController::class)->parameters(['regional' => 'departamento'])->names('departamento')->except(['departamento.show']);
//Ruta agencias
Route::resource('agencia', AgenciaController::class)->parameters(['agencia' => 'agencia'])->except(['agencia.show']);
//Ruta servicios
Route::resource('servicio', ServicioController::class)->except(['servicio.show']);
//Ruta cajas
Route::resource('caja', CajaController::class)->except(['caja.show']);
//Ruta clientes
Route::resource('cliente', ClienteController::class)->except(['cliente.show']);
//Ruta videos
Route::resource('video', VideoController::class)->except(['update', 'edit']);

//Ruta Turnos
Route::resource('turno', TurnoController::class)->except(['turno.show']);

//Ruta roles
Route::resource('rol', RoleController::class)->parameters(['rol' => 'role'])->names('rol');

Route::controller(TurnoController::class)->group(function () {
    route::get('solicita', 'indexturnosolicita')->name('turno.solicita');
    route::get('pantalla', 'indexturnopantalla')->name('turno.pantalla');
});



//ruta departamento
/*Route::controller(DepartamentoController::class)->group(function () {
    route::get('departamento', 'index')->name('departamento.index');
    route::get('departamento_nuevo', 'create')->name('departamento.create');
    route::post('departamento', 'store')->name('departamento.store');
    route::get('departamento/{departamento}/editar', 'edit')->name('departamento.edit');
    route::put('departamento/{departamento}', 'update')->name('departamento.update');
    route::delete('departamento/{departamento}', 'destroy')->name('departamento.destroy');
});*/