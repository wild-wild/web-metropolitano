<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Curso as modelCurso;
use Livewire\WithPagination;
use Illuminate\Auth\Events\Validated;

class Curso extends Component
{
      //variables
    public $nombreCurso;
    public $paraleloCurso;
    public $idCurso;
    //----------------
    //READ
    public function render()
    {
        $cursos = modelCurso::all(); //Paso 2 renderizar el modelo
        return view('livewire.curso.index', compact('cursos'))
        ->extends('layouts.contenido')
        ->section('contenidoBody');
    }
    //CREAR
    public function store()
    {
        $this->validate(
            [
                'nombreCurso' => 'required|alpha',
                'paraleloCurso' => 'required|alpha',
            ],
            [
                'nombreCurso.required' => 'El campo nombre es requerido',
                'paraleloCurso.required' => 'El campo paralelo es requerido',
                'nombreCurso.alpha' => 'Solo texto',
                'paraleloCurso.alpha' => 'Solo texto',
            ]);
        modelCurso::create([
            // usar trim para quitar espacios en blanco
            'nombre' => trim($this->nombreCurso),
            'paralelo' => trim($this->paraleloCurso),
        ]);

        $this->emit('alerta', [
                'type' => 'success',
                'message' => 'Curso creado correctamente',
                'icon' => 'success'
            ]);
        $this->emit('cerrarModal');
        $this->resetInput();
    }
    //UPDATE
    public function edit($id)
    {
        $curso = modelCurso::find($id);
        $this->nombreCurso = $curso->nombre;
        $this->paraleloCurso = $curso->paralelo;
        $this->idCurso = $curso->id;
    }
    public function update()
    {
        $this->validate(
            [
                'nombreCurso' => 'required|alpha',
                'paraleloCurso' => 'required|alpha',
            ],
            [
                'nombreCurso.required' => 'El campo nombre es requerido',
                'paraleloCurso.required' => 'El campo paralelo es requerido',
                'nombreCurso.alpha' => 'Solo texto',
                'paraleloCurso.alpha' => 'Solo texto',
            ]);
            $curso = modelCurso::find($this->idCurso);
            $curso->update([
                // usar trim para quitar espacios en blanco
                'nombre' => trim($this->nombreCurso),
                'paralelo' => trim($this->paraleloCurso),
            ]);
            // alerta
            $this->emit('alerta', [
                'type' => 'success',
                'message' => 'Curso actualizado correctamente',
                'icon' => 'success'
            ]);
            // cerrar modal
            $this->emit('cerrarModal');
            $this->resetInput();

    }

    //DELETE
    public function delete($id)
    {
        $this->idCurso = $id;
        $this->emit('alertaConfirmar', [
            'type' => 'warning',
            'message' => '¿Estas seguro de eliminar este curso?',
            'icon' => 'warning',
            'id' => $id,
        ]);
    }
    public function confirmarDelete()
    {
        $curso = modelCurso::find($this->idCurso);
        $curso->delete();
        // alerta
        $this->emit('alerta', [
            'type' => 'success',
            'message' => 'Curso eliminado correctamente',
            'icon' => 'success'
        ]);
    }


    // .........LISTENER..........
    protected $listeners = [
        'siConfirmoDelete' => 'confirmarDelete'
    ];

    // ---------funciones EXTRAS
    public function resetInput()
    {
        $this->nombreCurso = null;
        $this->paraleloCurso = null;
        // quitar errores
        $this->resetValidation();
    }


}
