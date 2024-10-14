<?php

namespace App\Livewire\Reglamentos\Inspector;

use Livewire\Component;

class Maps extends Component
{
    public function render()
    {
        $title = session('page_title','Maps');

        return view('livewire.reglamentos.inspector.maps')
            ->extends('layouts.app')
            ->section('content')->with(['title' => $title]);

    }
}
