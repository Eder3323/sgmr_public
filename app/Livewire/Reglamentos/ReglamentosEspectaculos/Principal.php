<?php

namespace App\Livewire\Reglamentos\ReglamentosEspectaculos;

use Livewire\Component;

class Principal extends Component
{

    public function render()
    {
        $title = session('page_title','Reglamentos y Espectaculos');

        return view('livewire.reglamentos.reglamentos-espectaculos.principal')
            ->extends('layouts.app')
            ->section('content')->with(['title' => $title]);
    }
}
