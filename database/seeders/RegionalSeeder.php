<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamento::create([
            'nombre_departamento' => 'La Paz',
            'sigla_departamento' => 'r-lpz',
            'descripcion_departamento' => 'regional del departamento de La Paz',
        ]);
        Departamento::create([
            'nombre_departamento' => 'Cochabamba',
            'sigla_departamento' => 'r-cba',
            'descripcion_departamento' => 'regional del departamento de Cochabamba',
        ]);
        Departamento::create([
            'nombre_departamento' => 'Santa Cruz',
            'sigla_departamento' => 'r-scz',
            'descripcion_departamento' => 'regional del departamento de Santa Cruz',
        ]);
        Departamento::create([
            'nombre_departamento' => 'Oruro',
            'sigla_departamento' => 'r-oru',
            'descripcion_departamento' => 'regional del departamento de Oruro',
        ]);
        Departamento::create([
            'nombre_departamento' => 'Potosí',
            'sigla_departamento' => 'r-pot',
            'descripcion_departamento' => 'regional del departamento de Potosí',
        ]);
        Departamento::create([
            'nombre_departamento' => 'Chuquisaca',
            'sigla_departamento' => 'r-chu',
            'descripcion_departamento' => 'regional del departamento de Chuquisaca',
        ]);
        Departamento::create([
            'nombre_departamento' => 'Tarija',
            'sigla_departamento' => 'r-tar',
            'descripcion_departamento' => 'regional del departamento de Tarija',
        ]);
    }
}
