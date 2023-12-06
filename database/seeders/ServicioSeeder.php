<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicio::create([
            'nombre_servicio' => 'plataforma',
            'codigo_servicio' => 'pla',
            'descripcion_servicio' => 'el servicio de plataforma se encarga de...',
        ]);
        Servicio::create([
            'nombre_servicio' => 'almacenes',
            'codigo_servicio' => 'alm',
            'descripcion_servicio' => 'el servicio de almacenes se encarga de...',
        ]);
        Servicio::create([
            'nombre_servicio' => 'carpeta de pagos',
            'codigo_servicio' => 'cp',
            'descripcion_servicio' => 'el servicio de carpeta de pagos se encarga de...',
        ]);
        Servicio::create([
            'nombre_servicio' => 'inspección',
            'codigo_servicio' => 'ins',
            'descripcion_servicio' => 'el servicio de inspección se encarga de...',
        ]);
        Servicio::create([
            'nombre_servicio' => 'consultas',
            'codigo_servicio' => 'con',
            'descripcion_servicio' => 'el servicio de consultas se encarga de...',
        ]);
    }
}
