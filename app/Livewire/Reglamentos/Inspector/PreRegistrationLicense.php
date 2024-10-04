<?php

namespace App\Livewire\Reglamentos\Inspector;

use Livewire\Component;
use App\Models\Reglamentos\Inspector\PreRegistrationLicense as PreRegistrationLicense2;

class PreRegistrationLicense extends Component
{
    public $owner_name;
    public $company_name;
    public $rfc;
    public $business_type;
    public $street_name;
    public $street_number;
    public $locality;
    public $municipality;
    public $cp;

    public function mount(){
        $this->business_type = "Propio";
    }
    protected $rules = [
        'owner_name' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        'rfc' => 'required|string|max:13',
        'business_type' => 'required|string|max:255',
        'street_name' => 'required|string|max:255',
        'street_number' => 'required|numeric',
        'locality' => 'required|string|max:255',
        'municipality' => 'required|string|max:255',
        'cp' => 'required|string|max:5',
    ];

    public function save()
    {
        $validated = $this->validate();

        PreRegistrationLicense2::create([
            'owner_name' => $this->owner_name,
            'company_name' => $this->company_name,
            'rfc' => $this->rfc,
            'business_type' => $this->business_type,
            'street_name' => $this->street_name,
            'street_number' => $this->street_number,
            'locality' => $this->locality,
            'municipality' => $this->municipality,
            'cp' => $this->cp,
        ]);

        $this->dispatch('setSessionErrors', type:'success', message: 'Registro Guardado Exitosamente!');
        $this->reset();
    }

    public function changeBussines($value) :void {
        $this->business_type = $value;
    }

    public function render()
    {
        return view('livewire.reglamentos.inspector.pre-registration-license')
            ->extends('layouts.app')
            ->section('content')->with(['title'=>'Pre Registro Licencia']);
    }
}
