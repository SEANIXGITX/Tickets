<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Servicio extends Model
{
    use HasFactory;

    //mutador y accesor para nombre_agencia
    protected function nombreServicio(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function codigoServicio(): Attribute
    {
        return new Attribute(
            get: fn ($value) => strtoupper($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function descripcionServicio(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucfirst($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    protected $fillable = [
        'nombre_servicio',
        'codigo_servicio',
        'descripcion_servicio',
        'estado_servicio',
    ];

    //Relacion uno a uno inverso
    public function caja()
    {
        return $this->belongsTo('App\Models\Caja', 'servicio_id');
    }

    //Relacion uno a uno inverso
    public function turno()
    {
        return $this->belongsTo('App\Models\Turno');
    }
}
