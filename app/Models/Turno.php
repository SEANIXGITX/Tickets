<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    //proteger campos    
    protected $fillable = [
        'codigo_turno',
        'tipo_turno',
        'estado_turno',
        'cliente_id',
        'servicio_id',
        'agencia_id',
        'caja_id'
    ];

    
    //Realcion uno a uno
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio');
    }

    //Realcion uno a uno
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente');
    }

    //Realcion uno a uno
    public function caja()
    {
        return $this->hasOne('App\Models\Caja');
    }

}
