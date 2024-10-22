<?php

namespace App\Livewire\Reglamentos\Inspector;

use App\Models\Reglamentos\Inspector\Coordinate;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class Maps extends Component
{
    public $latitude;
    public $longitude;
    public $status = true; // Default status
    protected $listeners = ['saveCoordinate'];
    #[NoReturn] #[On('saveCoordinate')]
    public function saveCoordinate($latitude, $longitude) :void
    {
        Coordinate::create([
            'latitude' => $latitude,
            'longitude' => $longitude,
            'status' => $this->status, // Assuming status is set by a different logic
        ]);

        $this->dispatch('setSessionErrors', type:'success', message: 'Coordenadas Guardadas!');

    }
    public function render()
    {
        $coordinates = Coordinate::all(['latitude', 'longitude', 'status']);
        $title = session('page_title','Maps');

        return view('livewire.reglamentos.inspector.maps')
            ->extends('layouts.app')
            ->section('content')->with(['title' => $title, 'coordinates' => $coordinates]);

    }
}
