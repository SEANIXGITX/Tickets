<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Turno;
use Illuminate\Support\Facades\Auth;

class MuestraTurno extends Component
{
    public function render()
    {
        return view('livewire.muestra-turno');
    }
}
