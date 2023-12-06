<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Departamento;
use App\Models\Agencia;
use App\Models\User;

class RegionalAgencia extends Component
{

    public $departamentos;
    public $departamentoId;

    public $agencias = [];
    public $agenciasId;
    
    public $user;
    
    public function mount($user)
    {
        $this->departamentos = Departamento::all();
        
        if ($user->departamento_id != '') {
           $this->departamentoId = $user->departamento_id;
        }
                
        if ($this->departamentoId != '') {
           $this->agencias = Agencia::all()->where('departamento_id', $this->departamentoId);
        }
        else{
            $this->agencias = [];
        }
    }

    public function updatedDepartamentoId()
    {
        if ($this->departamentoId != '') {
            $this->agencias = Agencia::all()->where('departamento_id', $this->departamentoId);
        }
         
        else {
            $this->agencias = [];
        }
    }

    public function render()
    {
        return view('livewire.regional-agencia');
    }
}
