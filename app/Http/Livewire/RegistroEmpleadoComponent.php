<?php

namespace App\Http\Livewire;

use App\Models\empleado;
use Livewire\Component;

class RegistroEmpleadoComponent extends Component
{
    public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $CI;
    public $telefono;
    public $direccion;
    public $sueldo;
    // public function updated($fields)        
    // //  'nombre'=>'required',
        
    // //   'apellido_paterno'=>'required',
    // //    'apellido_materno'=>'required',
    // //     'CI'=>'required',
    // //      'telefono'=>'required',
    // //       'direccion'=>'required',
    // //        'sueldo'=>'required'
    // }
    public function render()
    {
        return view('livewire.personal.registro-empleado-component');
    }
}
