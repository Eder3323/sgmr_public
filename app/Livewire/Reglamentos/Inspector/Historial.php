<?php

namespace App\Livewire\Reglamentos\Inspector;

use Livewire\Component;

class Historial extends Component
{
    public function render()
    {
        $title = session('page_title','Historial de Registros');

        return view('livewire.reglamentos.inspector.historial')
            ->extends('layouts.app')
            ->section('content')->with(['title' => $title]);
    }
}
