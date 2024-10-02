<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
// curso
use App\Models\Curso;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrador',
            'apellido' => 'adm',
            'telefono' => 'Sin telefono',
            'email' => 'admin@dev.bo',
            'password' => bcrypt('12345678'),
        ])->assignRole('administrador');
        User::create([
            'name' => 'Sara',
            'apellido' => 'Arroyo',
            'telefono' => 'Sin telefono',
            'email' => 'admin@sfs.bo',
            'password' => bcrypt('12345678'),
        ])->assignRole('administrador');
    }
}
