<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $administrador = Role::create(['name' => 'administrador']);
        $secretaria = Role::create(['name' => 'secretaria']);
        Permission::create(['name' => 'roles'])->syncRoles([$administrador]);
        // usuarios
        Permission::create(['name' => 'usuario-ruta'])->syncRoles([$administrador]);
        Permission::create(['name' => 'usuario-crear']);
        Permission::create(['name' => 'usuario-editar']);
        Permission::create(['name' => 'usuario-eliminar']);
        // cursos
        Permission::create(['name' => 'curso-ruta'])->syncRoles([$administrador,$secretaria]);
        Permission::create(['name' => 'curso-crear']);
        Permission::create(['name' => 'curso-editar']);
        Permission::create(['name' => 'curso-eliminar']);
    }
}
