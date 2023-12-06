<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //llamo al seeder de regionales
        $this->call(RegionalSeeder::class);

        //llamo al seeder de Agencias
        $this->call(AgenciaSeeder::class);

        //llamo al seeder de Servicios
        $this->call(ServicioSeeder::class);
        
        //llamo al seeder de roles
        $this->call(RoleSeeder::class);

        //llamo al seeder de usuarios
        $this->call(UserSeeder::class);

        //llamo al seeder de cajas
        $this->call(CajaSeeder::class);

        //llamo al seeder de videos
        //$this->call(VideoSeeder::class);
    }
}
