<?php

namespace App\Http\Livewire\Huesped;

use App\Models\Huesped;
use Livewire\Component;

class HuespedComponent extends Component
{
    public function render()
    {
        $huesped = Huesped::All();
        return view('livewire.huesped.huesped-component',compact('huesped'));
    }
}
