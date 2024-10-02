<?php

namespace App\Http\Livewire;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Arr;

class Configuracion extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $role;
    public $name;
    public $apellido;
    public $email;
    public $password;
    public $password_confirmation;
    public $user_id;
    public $keyWord;

    public $updateMode = false;

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        $usuarios = User::paginate(10);
        $this->roles = Role::all();
        return view('livewire.configuracion.index', compact('usuarios'), [
            'users' => User::latest()
                ->orWhere('name', 'LIKE', $keyWord)
                ->orWhere('apellido', 'LIKE', $keyWord)
                ->orWhere('email', 'LIKE', $keyWord)
                ->paginate(10),
        ])
            ->extends('layouts.contenido')
            ->section('contenidoBody');
    }
    private function resetInput()
    {
        $this->name = null;
        $this->apellido = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
        $this->role = null;
    }
    public function cancel()
    {
        $this->resetInput();
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio',
            'name.regex' => 'El campo nombre solo acepta letras',
            'apellido.regex' => 'El campo apellido solo acepta letras',
            'apellido.required' => 'El campo apellido es obligatorio',
            'email.required' => 'El Correo Electronico es obligatorio',
            'email.unique' => 'El Correo Electronico ya existe',
            'email.email' => 'El Correo Electronico no es valido',
            'password.required' => 'El campo contraseña es obligatorio',
            'password_confirmation.required' => 'El campo confirmar contraseña es obligatorio',
            'password_confirmation.same' => 'Las contraseñas no coinciden',
        ];
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/u',
            'apellido' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'role' => 'required',
        ]);
        User::create([
            'name' => $this->name,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role' => $this->role,
        ])->assignRole($this->role);

        $this->resetInput();
        $this->emit('cerrarModal');
        $this->emit('alerta', [
            'type' => 'success',
            'message' => 'Se Registro Correctamente',
            'icon' => 'success',
        ]);
    }

    //buscar por id de los usuarios par editar
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $user->name;
        $this->apellido = $user->apellido;
        $this->email = $user->email;
        // asignar el rol del usuario a edit
        $this->role = $user->roles->pluck('id')->first();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|alpha',
            'apellido' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'role' => 'required',
        ]);
        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'apellido' => $this->apellido,
                'email' => $this->email,
                'role' => $this->role,
            ]);
            $user->syncRoles($this->role);
            $this->emit('cerrarModal');
            $this->emit('alerta', [
                'type' => 'success',
                'message' => 'Se Actualizo Correctamente',
                'icon' => 'success',
            ]);
        }
    }
    public function delete($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('delete-confirmar');
    }

    public $delete_id;
    protected $listeners = ['deleteuser' => 'destroy'];
    public function destroy()
    {
        if ($this->delete_id) {
            $user = User::where('id', $this->delete_id)->first();
            $user->delete();
            $this->emit('alerta', [
                'type' => 'success',
                'message' => 'Se Elimino Correctamente',
                'icon' => 'success',
            ]);
        }
    }
}
