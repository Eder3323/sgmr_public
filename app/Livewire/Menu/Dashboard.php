<?php

namespace App\Livewire\Menu;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse as RedirectResponse;

class Dashboard extends Component
{
    public array $history = [];

    public function mount()
    {
        $this->history = Session::get('navigation_history', []);
    }

    public function routeVisited($title, $url)
    {
        if (!\Route::has($url)) {
            $message = 'Esta ruta no existe: '.$url. ' Favor de verificar con el Administrador';
            $this->dispatch('setSessionErrors', type:'error', message: $message);
            return;
        }
        $exists = false;
        foreach ($this->history as $entry) {
            if ($entry['title'] === $title && $entry['url'] === $url) {
                $exists = true;
                break;
            }
        }

        if (!$exists) {
            $this->history[] = ['title' => $title, 'url' => $url];
            Session::put('navigation_history', $this->history);
        }
        session()->flash('page_title', $title);
        return redirect()->route($url);
    }
    public function render()
    {
        $title = session('page_title','Dashboard');

        return view('livewire.menu.dashboard')
            ->extends('layouts.app')
            ->section('content')->with(['title'=> $title]);
    }
}
