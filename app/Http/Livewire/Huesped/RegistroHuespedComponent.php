<?php

namespace App\Http\Livewire;

use App\Models\Huesped;
use Livewire\Component;

class RegistroHuespedComponent extends Component
{
    /* public $nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $CI;
    public $telefono;
    public $direccion;
    public $name; */
    public function render()
    {
        return view('livewire.personal.registro-empleado-component');
    }
}
