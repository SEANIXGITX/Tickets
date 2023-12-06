<?php

namespace App\Livewire;

use App\Models\Caja;
use App\Models\Turno;
use App\Models\Cliente;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AtencionCajas extends Component
{
    public $turnoLista = [];
    
    public $agenciaUsuario;
    public $mensaje;

    public $clienteCI;
    public $clienteCODIGO;
    public $clienteATENCION;
    public $clienteFECHAHORA;

    public $clienteLLAMADA;
    public $clienteINICIAR;
    public $clienteTERMINAR;
    public $clienteCANCELAR;

    public $mostrarBOTONES = false;
    public $mostrarBOTONiniciarATENCION = true;
    public $mostrarBOTONterminarATENCION = false;

    public $idTURNO;

    public $clienteTURNO1 = '';
    public $clienteTURNO2 = '';
    public $clienteTURNO3 = '';
    public $clienteTURNO4 = '';

    public $turnoESTILOS;

    public $videos;

    public $listaEspera;
    

    public function mount()
    {
        $this->agenciaUsuario = Auth::user()->agencia_id;
        $cajaUSUARIO = Auth::user()->id;
        $cajaSERVICIO = Caja::where('user_id', $cajaUSUARIO)->pluck('servicio_id')->first();

        $this->turnoLista = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'En Espera')->where('servicio_id', $cajaSERVICIO)->get();
    }

    public function mostrarVIDEO()
    {
        $this->videos = Video::all();
    }
    
    public function tarjeta($lista)
    {
        $this->mostrarBOTONES = true;

        if($lista != ''){
            $datosTARJETA = Turno::where('id', $lista)->first();
            $buscaCI = Cliente::where('id', $datosTARJETA->cliente_id)->pluck('ci_cliente')->first();

            if ($datosTARJETA->tipo_turno == 1) {
                $tipoTURNO = 'Preferencial';
            } else {
                $tipoTURNO = 'Normal';
            }

            $this->clienteCI = $buscaCI;
            $this->clienteCODIGO = $datosTARJETA->codigo_turno;
            $this->clienteATENCION = $tipoTURNO;
            $this->clienteFECHAHORA = $datosTARJETA->created_at;

            $this->clienteLLAMADA = $lista;
            $this->clienteINICIAR = $lista;
            $this->clienteTERMINAR = $lista;
            $this->clienteCANCELAR = $lista;
        }
    }

    public function llamada($clienteLLAMADA)
    {
        $buscallAMADA = Turno::where('id', $clienteLLAMADA)->first();
        $buscaCAJA = Caja::where('user_id', Auth::user()->id)->first();

        if($buscallAMADA->caja_id == ''){
            session()->flash('message', 'Turno asosiado a la caja '. $buscaCAJA->codigo_caja);
        }
        else{
            Turno::find($clienteLLAMADA)->update([
                'estado_turno' => 'Llamando',
                'caja_id' => $buscaCAJA->id
            ]);

            //$mensaje = $buscallAMADA->codigo_turno . ' - ' . $buscaCAJA->codigo_caja;
        }

        /*$this->dispatch('notification', [
            'body' => $mensaje,
            'timeout' => 4000
        ]);*/

        $this->agenciaUsuario = Auth::user()->agencia_id;
        $cajaUSUARIO = Auth::user()->id;
        $cajaSERVICIO = Caja::where('user_id', $cajaUSUARIO)->pluck('servicio_id')->first();

        $this->turnoLista = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'En Espera')->where('servicio_id', $cajaSERVICIO)->get();
        
    }

    public function iniciar($clienteINICIAR)
    {
        $this->mostrarBOTONterminarATENCION = true;
        $this->mostrarBOTONiniciarATENCION = false;
        
        $buscaINICIAR = Turno::find($clienteINICIAR)->where('estado_turno', 'Llamando')->first();

        Turno::find($clienteINICIAR)->update([
            'estado_turno' => 'Atendiendo',
        ]);

        $this->agenciaUsuario = Auth::user()->agencia_id;
        $cajaUSUARIO = Auth::user()->id;
        $cajaSERVICIO = Caja::where('user_id', $cajaUSUARIO)->pluck('servicio_id')->first();

        $this->turnoLista = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'En Espera')->where('servicio_id', $cajaSERVICIO)->get();
    }

    public function terminar($clienteTERMINAR)
    {
        $this->mostrarBOTONiniciarATENCION = true;
        $this->mostrarBOTONterminarATENCION = false;

        $buscaTERMINAR = Turno::find($clienteTERMINAR)->where('estado_turno', 'Atendiendo')->first();
        
        Turno::find($clienteTERMINAR)->where('estado_turno', 'Atendiendo')->update([
            'estado_turno' => 'Atendido',
        ]);

        $this->reset();

        $this->agenciaUsuario = Auth::user()->agencia_id;
        $cajaUSUARIO = Auth::user()->id;
        $cajaSERVICIO = Caja::where('user_id', $cajaUSUARIO)->pluck('servicio_id')->first();

        $this->turnoLista = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'En Espera')->where('servicio_id', $cajaSERVICIO)->get();
        
    }
    
    public function cancelar($clienteCANCELAR)
    {
        $buscaCANCELAR = Turno::find($clienteCANCELAR)->first();

        Turno::find($clienteCANCELAR)->update([
            'estado_turno' => 'Cancelado',
        ]);

        $this->reset();

        $this->agenciaUsuario = Auth::user()->agencia_id;
        $cajaUSUARIO = Auth::user()->id;
        $cajaSERVICIO = Caja::where('user_id', $cajaUSUARIO)->pluck('servicio_id')->first();

        $this->turnoLista = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'En Espera')->where('servicio_id', $cajaSERVICIO)->get();
    }

    public function render()
    {
        return view('livewire.atencion-cajas');
    }
}
