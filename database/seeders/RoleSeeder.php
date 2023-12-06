<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Supervisor']);
        $role3 = Role::create(['name' => 'Atencion']);
        $role4 = Role::create(['name' => 'Asistente']);

        //permiso para acceder al dashboard
        Permission::create(['name' => 'dashboard'])->syncRoles([$role1, $role2, $role3, $role4]);

        //permiso para acceder al CRUD de Regionales
        Permission::create(['name' => 'departamento.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'departamento.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'departamento.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'departamento.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'departamento.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'departamento.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'departamento.destroy'])->syncRoles([$role1, $role2]);

        //permiso para acceder al CRUD de Agencia
        Permission::create(['name' => 'agencia.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'agencia.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'agencia.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'agencia.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'agencia.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'agencia.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'agencia.destroy'])->syncRoles([$role1, $role2]);

        //permiso para acceder al CRUD de Servicio
        Permission::create(['name' => 'servicio.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'servicio.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'servicio.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'servicio.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'servicio.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'servicio.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'servicio.destroy'])->syncRoles([$role1, $role2]);

        //permiso para acceder al CRUD de Caja
        Permission::create(['name' => 'caja.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'caja.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'caja.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'caja.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'caja.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'caja.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'caja.destroy'])->syncRoles([$role1, $role2]);

        //permiso para acceder al CRUD de Cliente
        Permission::create(['name' => 'cliente.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'cliente.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'cliente.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'cliente.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'cliente.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'cliente.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'cliente.destroy'])->syncRoles([$role1, $role2]);

        //permiso para acceder al CRUD de Video
        Permission::create(['name' => 'video.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.destroy'])->syncRoles([$role1, $role2]);

        //permiso para acceder al CRUD de Turno
        Permission::create(['name' => 'turno.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'turno.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'turno.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'turno.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'turno.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'turno.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'turno.destroy'])->syncRoles([$role1, $role2]);

        //permiso para acceder al CRUD de Usuarios
        Permission::create(['name' => 'usuario.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.destroy'])->syncRoles([$role1, $role2]);

        //permiso para acceder al CRUD de Roles
        Permission::create(['name' => 'rol.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'rol.show'])->syncRoles([$role1]);
        Permission::create(['name' => 'rol.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'rol.store'])->syncRoles([$role1]);
        Permission::create(['name' => 'rol.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'rol.update'])->syncRoles([$role1]);
        Permission::create(['name' => 'rol.destroy'])->syncRoles([$role1]);

    }
}
