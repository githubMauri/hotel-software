<?php

namespace App\Http\Livewire\Personal;

use App\Models\empleado;
use Livewire\Component;

class RegistroEmpleadoComponent extends Component
{
    public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $email;
    public $CI;
    public $telefono;
    public $direccion;
    public $sueldo;

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

    public function storeEmpleado(){

        $this->validate( [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'CI' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'sueldo' => 'required'
        ]);

        $empleado=new empleado();
        $empleado->nombre=$this->nombre;
        $empleado->apellido_paterno=$this->apellido_paterno;
        $empleado->apellido_materno=$this->apellido_materno;
        $empleado->email=$this->email;
        $empleado->CI=$this->CI;
        $empleado->telefono=$this->telefono;
        $empleado->direccion=$this->direccion;
        $empleado->sueldo=$this->sueldo;
        $empleado->save();
        session()->flash('message', 'Nuevo empleadoregistrado');

    }

    public function render()
    {
        return view('livewire.personal.registro-empleado-component');
    }
}
