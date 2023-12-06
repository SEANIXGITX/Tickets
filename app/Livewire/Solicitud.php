<?php

namespace App\Livewire;

use App\Models\Caja;
use App\Models\Cliente;
use App\Models\Turno;
use App\Models\Servicio;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Solicitud extends Component
{
    //
    public $cliente_ci = '';
    public $crea_cliente = '';
    public $busca_cliente = '';
    public $encuentra_cliente;

    public $cliente_servicio_id = '';
    public $step = 0;
    public $cliente_atencion = '';
    public $numero_ticket = '';
    public $numero_generado = '';
    public $cod_servicio_nombre = '';
    public $cod_servicio_atencion = '';

    public $nombreRegional;
    public $nombreAgencia;
    
    //pagina formulario tipo wizard
    private $stepActions = [
        'submit1',
        'submit2',
        'submit3',
    ];

    public function mount()
    {
        $this->step = 0;
    }

    public function decreaseStep()
    {
        $this->resetValidation();
        $this->step--;
    }

    public function submit()
    {
        $action = $this->stepActions[$this->step];
        $this->$action();
    }

    public function submit1()
    {
        $this->validate([
            'cliente_ci' => 'required|min:5',
        ], [
            'cliente_ci.required' => 'El ingreso del carnet es obligatorio',
            'cliente_ci.min' => 'El carnet no debe ser menor a 5 digitos',
        ]);
        $this->step++;
    }

    public function submit2()
    {
        $this->validate([
            'cliente_servicio_id' => 'required',
        ], [
            'cliente_servicio_id.required' => 'Debe seleccionar un servicio',
        ]);
        $this->step++;
    }

    public function submit3()
    {
        $this->step++;
    }

    public function render()
    {
        $servicios = Servicio::all();
        return view('livewire.solicitud', compact('servicios'));
    }
    //fin añadido formulario tipo wizard


    //generacion de botones ingreso carnet
    public function quitardigito()
    {
        if (Str::length($this->cliente_ci > 1)) {
            $this->cliente_ci = Str::substrReplace($this->cliente_ci, '', -1);
        } else {
            $this->reset('cliente_ci');
        }
    }

    public function resetear()
    {
        $this->reset();
    }

    public function digito($digito)
    {
        $this->cliente_ci = $this->cliente_ci . $digito;
    }
    //fin generacion botones ingreso carnet

    //captura dato servidio id
    public function servicioID($servicioID)
    {
        $this->cliente_servicio_id = $servicioID;
    }
    //fin captura dato servidio id

    //captura dato tipo de atencion
    public function atencion($atencion)
    {
        $this->cliente_atencion = $atencion;
    }
    //fin captura dato tipo de atencion

    /*genero numero de turno*/
    public function generaticket($cliente_servicio_id){

        $agenciaIdUsuario = Auth::user()->agencia_id;
        
        $cod_servicio = Servicio::where(['id'=> $cliente_servicio_id])->first();
        $cod_servicio_nombre = $cod_servicio->nombre_servicio;

        if( $this->cliente_atencion == 1 ){
            $this->cod_servicio_atencion = 'Preferencial';
        }
        else{
            $this->cod_servicio_atencion = 'normal';
        }

        $codigo = Turno::orderBy('codigo_turno', 'desc')->where('agencia_id', $agenciaIdUsuario)->whereDate('created_at', now()->toDateString())->first();
        //$codigo = Turno::orderBy('codigo_turno', 'desc')->where(['agencia_id' => $agenciaIdUsuario])->first();

        if ($codigo != null) {
            $number = explode('-', $codigo->codigo_turno);
            $number_integer = (int)$number[1];
            $numero_ticket = strtoupper($cod_servicio->codigo_servicio . "-" . str_pad($number_integer + 1, 3, '0', STR_PAD_LEFT));
            $this->numero_generado = $numero_ticket;
            $this->cod_servicio_nombre = $cod_servicio_nombre;
        } 
        
        else {
            $numero_ticket = strtoupper($cod_servicio->codigo_servicio . "-" . str_pad(1, 3, '0', STR_PAD_LEFT));
            $this->numero_generado = $numero_ticket;
            $this->cod_servicio_nombre = $cod_servicio_nombre;
        }
        
    }
    /*fin genero numero de turno*/

    public function saveCI(){

        $crea_cliente = Cliente::create([
            'ci_cliente' => $this->cliente_ci,
        ]);

        $busca_cliente = Cliente::where(['ci_cliente' => $this->cliente_ci])->first();
        $encuentra_cliente = $busca_cliente->id;
        $this->encuentra_cliente = $encuentra_cliente;
    }

    public function saveTURNO(){

        $agencia_id = Auth::user()->agencia_id;

        //$idUsuario = Auth::user()->id;
        //$cajaIdUsuario = Caja::where('user_id', $idUsuario)->first();

        $turno = Turno::create([
            'codigo_turno' => $this->numero_generado,
            'tipo_turno' => $this->cliente_atencion,
            
            'cliente_id' => $this->encuentra_cliente,
            'servicio_id' => $this->cliente_servicio_id,
            'agencia_id' => $agencia_id,
            
            
        ]);
        
        $this->reset();
        if (Auth::check()) {
            $this->redirect('/solicita');
        }
        else{
            $this->redirect('/solicita');
        }
        
    }

}