<?php

namespace App\Livewire;

use Livewire\Component;

class Prueba2 extends Component
{
    public function render()
    {
        return view('livewire.prueba2') //;
            ->extends('layouts.app')
            ->section('content')->with(['title' => 'CONFIGURACIONES'] );
    }
}
