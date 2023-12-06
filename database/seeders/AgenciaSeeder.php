<?php

namespace Database\Seeders;

use App\Models\Agencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agencia::create([
            'nombre_agencia' => 'Agencia de La Paz',
            'sigla_agencia' => 'a-lpz',
            'descripcion_agencia' => 'agencia correspondiente al departamento de La Paz',
            'departamento_id' => '1'
        ]);
        Agencia::create([
            'nombre_agencia' => 'Agencia del Alto',
            'sigla_agencia' => 'a-alt',
            'descripcion_agencia' => 'agencia correspondiente al departamento de La Paz',
            'departamento_id' => '1'
        ]);
    }
}
