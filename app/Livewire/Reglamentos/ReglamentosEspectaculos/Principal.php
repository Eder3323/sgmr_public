<?php

namespace App\Livewire\Reglamentos\ReglamentosEspectaculos;

use Livewire\Component;

class Principal extends Component
{
    public function render()
    {
        return view('livewire.reglamentos.reglamentos-espectaculos.principal')
            ->extends('layouts.app')
            ->section('content')->with(['title'=>'Reglamentos y Espectaculos']);
    }
}
