<?php

namespace Database\Seeders;

use App\Http\Livewire\Carreras;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Roles y permisos

        //Usuarios Base
        // User::create([
        //     'name' => 'administrador',
        //     'apellido' => 'colegio',
        //     'email' => 'admin@dev.bo',
        //     'password' => bcrypt('12345678')
        // ])->assignRole('administrador');

        $this->call(rolSeeder::class);
        $this->call(UserSeeder::class);
    }
}
