<?php

namespace App\Livewire\Reglamentos\Inspector;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Reglamentos\Inspector\PreRegistrationLicense;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class TableHistorial extends DataTableComponent
{
    protected $model = PreRegistrationLicense::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
    public function filters(): array
    {
        return [
            TextFilter::make('owner_name')
                ->contains('owner_name')->setWireLive()
                ->config([
                    'placeholder' => 'Search Name',
                    'maxlength' => '25',
                ]),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre Propietario", "owner_name")
                ->sortable()
                ->searchable()
                ->secondaryHeaderFilter('owner_name'),
            Column::make("Razón Social", "company_name")
                ->sortable()
                ->collapseOnMobile(),
            Column::make("Rfc", "rfc")
                ->sortable()
                ->collapseOnMobile(),
            Column::make("Tipo de Negocio", "business_type")
                ->sortable()
                ->collapseOnMobile(),
            Column::make("Nombre Calle", "street_name")
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Número", "street_number")
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Localidad", "locality")
                ->sortable()
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Municipio", "municipality")
                ->sortable()
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Cp", "cp")
                ->sortable()
                ->searchable()
                ->collapseOnMobile(),
        ];
    }
}
