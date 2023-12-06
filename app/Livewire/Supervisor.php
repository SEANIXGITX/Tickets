<?php

namespace App\Livewire;

use App\Models\Caja;
use App\Models\Turno;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Supervisor extends Component
{
    public $turnoListaEnEspera = [];
    public $turnoListaLlamando = [];
    public $turnoListaAtendiendo = [];
    public $turnoListaAtendido = [];
    public $turnoListaCancelado = [];

    public $agenciaUsuario;


    public function mount()
    {
        $this->agenciaUsuario = Auth::user()->agencia_id;
        $this->turnoListaEnEspera = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'En Espera')->whereDate('created_at', now()->toDateString())->get();
        $this->turnoListaLlamando = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'Llamando')->whereDate('created_at', now()->toDateString())->get();
        $this->turnoListaAtendiendo = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'Atendiendo')->whereDate('created_at', now()->toDateString())->get();
        $this->turnoListaAtendido = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'Atendido')->whereDate('created_at', now()->toDateString())->get();
        $this->turnoListaCancelado = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'Cancelado')->whereDate('created_at', now()->toDateString())->get();
    }

    public function actualizar()
    {
        $this->agenciaUsuario = Auth::user()->agencia_id;
        $this->turnoListaEnEspera = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'En Espera')->whereDate('created_at', now()->toDateString())->get();
        $this->turnoListaLlamando = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'Llamando')->whereDate('created_at', now()->toDateString())->get();
        $this->turnoListaAtendiendo = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'Atendiendo')->whereDate('created_at', now()->toDateString())->get();
        $this->turnoListaAtendido = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'Atendido')->whereDate('created_at', now()->toDateString())->get();
        $this->turnoListaCancelado = Turno::where('agencia_id', $this->agenciaUsuario)->where('estado_turno', 'Cancelado')->whereDate('created_at', now()->toDateString())->get();
    
    }

    public function render()
    {
        return view('livewire.supervisor');
    }
}
