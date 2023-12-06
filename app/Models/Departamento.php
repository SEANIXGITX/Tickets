<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Departamento extends Model
{
    use HasFactory;

    //mutador y accesor para nombre_agencia
    protected function nombreDepartamento(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function siglaDepartamento(): Attribute
    {
        return new Attribute(
            get: fn ($value) => strtoupper($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function descripcionDepartamento(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucfirst($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //relacion uno a muchos
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    //relacion uno a muchos
    public function agencias()
    {
        return $this->hasMany('App\Models\Agencia');
    }
}
