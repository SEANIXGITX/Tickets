<?php

namespace Database\Seeders;

use App\Models\Caja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Caja::create([
            'nombre_caja' => 'Caja 1',
            'codigo_caja' => 'C1',
            'descripcion_caja' => 'atencion de caja',
            'agencia_id' => '1',
            'user_id' => '3',
            'servicio_id' => '1',
        ]);
        Caja::create([
            'nombre_caja' => 'Caja 2',
            'codigo_caja' => 'C2',
            'descripcion_caja' => 'atencion de caja',
            'agencia_id' => '1',
            'user_id' => '4',
            'servicio_id' => '2',
        ]);
        Caja::create([
            'nombre_caja' => 'Caja 3',
            'codigo_caja' => 'C3',
            'descripcion_caja' => 'atencion de caja',
            'agencia_id' => '1',
            'user_id' => '5',
            'servicio_id' => '3',
        ]);
        Caja::create([
            'nombre_caja' => 'Caja 4',
            'codigo_caja' => 'C4',
            'descripcion_caja' => 'atencion de caja',
            'agencia_id' => '1',
            'user_id' => '6',
            'servicio_id' => '4',
        ]);
        Caja::create([
            'nombre_caja' => 'Caja 5',
            'codigo_caja' => 'C5',
            'descripcion_caja' => 'atencion de caja',
            'agencia_id' => '1',
            'user_id' => '7',
            'servicio_id' => '5',
        ]);
    }
}
