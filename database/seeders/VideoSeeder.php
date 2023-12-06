<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'titulo_video' => 'Kits de 5 generacion promo',
            'descripcion_video' => 'Video informativo sobre como obtener de los kits de 5ta generacion',
            'ruta_video' => '1699542735-conversión_de_vehiculos_a_gnv_kits_5ta_generacion.mp4',
            'user_id' => '1'
        ]);
    }
}
