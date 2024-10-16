<?php

use Livewire\Volt\Component;
use Illuminate\Support\Facades\Session;

new class extends Component {
    protected $listeners = ['setSessionErrors'];

    #[On('setSessionErrors')]
    public function setSessionErrors($type, $message)
    {
        session()->flash($type, $message);
    }
}; ?>

<div>
    @if (session()->has('error'))
        <x-menu.alert-message :bgColor="'bg-red-200'" :textColor="'text-red-800'" :message="session('error')" />
    @elseif(session()->has('success'))
        <x-menu.alert-message :bgColor="'bg-green-200'" :textColor="'text-green-800'" :message="session('success')" />
    @endif
</div>
