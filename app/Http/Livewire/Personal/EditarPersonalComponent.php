<?php

namespace App\Http\Livewire\Personal;

use App\Models\empleado;
use Livewire\Component;

class EditarPersonalComponent extends Component
{
    public $empleado_id;
    public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $email;
    public $CI;
    public $telefono;
    public $direccion;
    public $sueldo;

    public function mount($empleado_id)
    {
        $empleado = empleado::find($empleado_id);
        $this->empleado_id =$empleado->id;
        $this->nombre =$empleado->nombre;
        $this->apellido_paterno =$empleado->apellido_paterno;
        $this->apellido_materno =$empleado->apellido_materno;
        $this->email =$empleado->email;
        $this->CI =$empleado->CI;
        $this->telefono =$empleado->telefono;
        $this->direccion =$empleado->direccion;
        $this->sueldo =$empleado->sueldo;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'email' => 'required',
            'CI' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'sueldo' => 'required'
        ]);
    }

    
    public function updateEmpleado(){

        $this->validate( [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'CI' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'sueldo' => 'required'
        ]);

        $empleado=empleado::find($this->empleado_id);
        $empleado->nombre=$this->nombre;
        $empleado->apellido_paterno=$this->apellido_paterno;
        $empleado->apellido_materno=$this->apellido_materno;
        $empleado->email=$this->email;
        $empleado->CI=$this->CI;
        $empleado->telefono=$this->telefono;
        $empleado->direccion=$this->direccion;
        $empleado->sueldo=$this->sueldo;
        $empleado->save();
        session()->flash('message', 'Actualizacion Exitosa');

    }

    public function render()
    {
        return view('livewire.personal.editar-personal-component');
    }
}
