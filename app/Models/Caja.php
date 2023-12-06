<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Caja extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_caja',
        'codigo_caja',
        'descripcion_caja',
        'agencia_id',
        'servicio_id',
        'user_id',
    ];

    //mutador y accesor para nombre_agencia
    protected function nombreCaja(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function codigoCaja(): Attribute
    {
        return new Attribute(
            get: fn ($value) => strtoupper($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function descripcionCaja(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucfirst($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //Realcion uno a uno
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id');
    }

    //Realcion uno a uno
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //Realcion uno a uno
    public function agencia()
    {
        return $this->belongsTo('App\Models\Agencia');
    }

    //Relacion uno a uno inverso
    public function turno()
    {
        return $this->belongsTo('App\Models\Turno');
    }
}
