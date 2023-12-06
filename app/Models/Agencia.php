<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Agencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_agencia',
        'sigla_agencia',
        'descripcion_agencia',
    ];

    //mutador y accesor para nombre_agencia
    protected function nombreAgencia(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value), //accesor
            set: fn($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function siglaAgencia(): Attribute
    {
        return new Attribute(
            get: fn ($value) => strtoupper($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para descripcion_agencia
    protected function descripcionAgencia(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucfirst($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //relacion uno a muchos inversa
    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento', 'departamento_id');
    }

    //relacion uno a muchos inversa
    public function caja()
    {
        return $this->hasOne('App\Models\Caja');
    }

    //relacion uno a muchos
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
