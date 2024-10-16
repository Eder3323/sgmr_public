<?php

namespace App\Livewire\Reglamentos\Inspector;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Reglamentos\Inspector\PreRegistrationLicense;
use Rappasoft\LaravelLivewireTables\Views\Filters\NumberFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class TableHistorial extends DataTableComponent
{
    protected $model = PreRegistrationLicense::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setColumnSelectStatus(true);
        $this->setColumnSelectDisabled();
//        $this->setSortingDisabled();
    }
    public function filters(): array
    {
        return [
//            TextFilter::make('id')
//                ->contains('id')->setWireLive()
//                ->config([
//                    'placeholder' => '  Id',
//                    'maxlength' => '25',
//                ]),
            TextFilter::make('owner_name')
                ->contains('owner_name')->setWireLive()
                ->config([
                    'placeholder' => 'Propietario',
                    'maxlength' => '25',
                ]),
            TextFilter::make('company_name')
                ->contains('company_name')->setWireLive()
                ->config([
                    'placeholder' => 'Razón',
                    'maxlength' => '25',
                ]),
            TextFilter::make('rfc')
                ->contains('rfc')->setWireLive()
                ->config([
                    'placeholder' => 'RFC',
                    'maxlength' => '25',
                ]),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
//                ->secondaryHeaderFilter('id'),
            Column::make("Nombre Propietario", "owner_name")
                ->sortable()
                ->searchable()
                ->secondaryHeaderFilter('owner_name'),
            Column::make("Razón Social", "company_name")
                ->sortable()
                ->collapseOnMobile()
            ->secondaryHeaderFilter('company_name'),
            Column::make("Rfc", "rfc")
                ->sortable()
                ->collapseOnMobile()
                ->secondaryHeaderFilter('rfc'),
            Column::make("Tipo de Negocio", "business_type")
                ->sortable()
                ->collapseOnMobile(),
            Column::make("Nombre Calle", "street_name")
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Número", "street_number")
                ->searchable()
                ->collapseOnMobile()
                ->collapseAlways(),
            Column::make("Localidad", "locality")
                ->sortable()
                ->searchable()
                ->collapseOnMobile()
                ->collapseAlways(),
            Column::make("Municipio", "municipality")
                ->sortable()
                ->searchable()
                ->collapseOnMobile()
                ->collapseAlways(),
            Column::make("Cp", "cp")
                ->sortable()
                ->searchable()
                ->collapseOnMobile()
                ->collapseAlways(),
        ];
    }
}
