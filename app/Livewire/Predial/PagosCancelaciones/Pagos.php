<?php

namespace App\Livewire\Predial\PagosCancelaciones;

use Livewire\Component;

class Pagos extends Component
{
    public function render()
    {
        return view('livewire.predial.pagos-cancelaciones.pagos')
            ->extends('layouts.app')
            ->section('content')->with(['title'=>'Pagos']);
    }
}
