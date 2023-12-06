<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Video extends Model
{
    use HasFactory;

    //mutador y accesor para nombre_agencia
    protected function tituloVideo(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucfirst($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function rutaVideo(): Attribute
    {
        return new Attribute(
            get: fn ($value) => strtolower($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //mutador y accesor para sigla_agencia
    protected function descripcionVideo(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucfirst($value), //accesor
            set: fn ($value) => strtolower($value) //mutador
        );
    }

    //protege campos de asignacion masiva --- campos permitidos
    protected $fillable = ['name', 'description', 'categoria'];
    
    //protege campos de asignacion masiva --- campos protegidos
    protected $guarded = [];

    //relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
