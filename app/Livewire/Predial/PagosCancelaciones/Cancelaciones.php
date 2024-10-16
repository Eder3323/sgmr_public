<?php

namespace App\Livewire\Predial\PagosCancelaciones;

use Livewire\Component;

class Cancelaciones extends Component
{
    public $name;
    public $email;
    public $message;

    public function mount()
    {
        $this->name = session()->get('name', '');
        $this->email = session()->get('email', '');
        $this->message = session()->get('message', '');
    }

    public function updated($propertyName)
    {
        session()->put($propertyName, $this->{$propertyName});
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);
        session()->flash('success', 'Formulario enviado con éxito.');
        session()->forget(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.predial.pagos-cancelaciones.cancelaciones')
            ->extends('layouts.app')
            ->section('content')->with(['title' => 'Cancelaciones']);
    }
}
