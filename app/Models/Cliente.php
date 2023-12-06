<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'ci_cliente',
        'ci_complemento_cliente',
    ];

    //Relacion uno a uno inverso
    public function turno()
    {
        return $this->belongsTo('App\Models\Turno');
    }

}
