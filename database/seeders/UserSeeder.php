<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('12345678'),
            'departamento_id' => '1',
            'agencia_id' => '1',
        ])->assignRole('Admin');

        User::create([
            'name' => 'Claudia Vargas',
            'email' => 'claudiavargasocana29@gmail.com',
            'password' => bcrypt('12345678'),
            'departamento_id' => '1',
            'agencia_id' => '1',
        ])->assignRole('Supervisor');

        User::create([
            'name' => fake()->name(),
            'email' => 'atencion1@gmail.com',
            'password' => bcrypt('12345678'),
            'departamento_id' => '1',
            'agencia_id' => '1',
        ])->assignRole('Atencion');

        User::create([
            'name' => fake()->name(),
            'email' => 'atencion2@gmail.com',
            'password' => bcrypt('12345678'),
            'departamento_id' => '1',
            'agencia_id' => '1',
        ])->assignRole('Atencion');

        User::create([
            'name' => fake()->name(),
            'email' => 'atencion3@gmail.com',
            'password' => bcrypt('12345678'),
            'departamento_id' => '1',
            'agencia_id' => '1',
        ])->assignRole('Atencion');

        User::create([
            'name' => fake()->name(),
            'email' => 'atencion4@gmail.com',
            'password' => bcrypt('12345678'),
            'departamento_id' => '1',
            'agencia_id' => '1',
        ])->assignRole('Atencion');

        User::create([
            'name' => fake()->name(),
            'email' => 'atencion5@gmail.com',
            'password' => bcrypt('12345678'),
            'departamento_id' => '1',
            'agencia_id' => '1',
        ])->assignRole('Atencion');

        User::create([
            'name' => fake()->name(),
            'email' => 'asistente@gmail.com',
            'password' => bcrypt('12345678'),
            'departamento_id' => '1',
            'agencia_id' => '1',
        ])->assignRole('Asistente');
    }
}