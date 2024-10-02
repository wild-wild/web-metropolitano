<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role as ModelsRole;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class Role extends Component
{
    // variables
    public $name;
    public $permisos = [];
    public $permisosRol = [];
    public $role_id;

    public function mount()
    {
        $this->permisosRol = Permission::get();
    }
    // READ
    public function render()
    {
        $roles = ModelsRole::all();
        return view('livewire.role.index', compact('roles'))
            ->extends('layouts.contenido')
            ->section('contenidoBody');
    }
}
