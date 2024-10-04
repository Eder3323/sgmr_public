<?php

namespace App\Livewire;

use Livewire\Component;

class Prueba extends Component
{
    public function Hola()
    {
        dd("dede");
    }
    public function render()
    {
        return view('livewire.prueba')
        ->extends('layouts.app')
        ->section('content')->with(['title'=>'CATALOGOS PREDIAL']);

    }

}
