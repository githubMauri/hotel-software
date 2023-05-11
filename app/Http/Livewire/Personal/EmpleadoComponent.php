<?php

namespace App\Http\Livewire\Personal;

use App\Models\empleado;
use Livewire\Component;

class EmpleadoComponent extends Component
{
    public function render()
    {
        $empleados = empleado::All();
        return view('livewire.personal.empleado-component', ['empleados' => $empleados]);
    }
}
