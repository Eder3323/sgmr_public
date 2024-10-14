<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Predial\PagosCancelaciones\Pagos as Pagos;
use App\Livewire\Predial\PagosCancelaciones\Cancelaciones as Cancelaciones;
use App\Livewire\Menu\Dashboard as Dashboard;
use App\Livewire\Reglamentos\ReglamentosEspectaculos\Principal as ReglamentosPrincipal;
use App\Livewire\Reglamentos\Inspector\PreRegistrationLicense as PreRegistrationLicense;
use App\Livewire\Reglamentos\Inspector\Historial as ReglamentosInspectorHistorial;
use App\Livewire\Reglamentos\Inspector\Maps as ReglamentosInspectorMaps;


// ---------------/DASHBOARD --------------------
Route::get('/', function () {return redirect()->route('login');});

Route::middleware(['auth', 'verified'])->group(function () {
    // ---------------/DASHBOARD --------------------
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    // ---------------/PREDIAL ----------------------
    Route::get('/predial/pagos', Pagos::class)->name('predial.pagos');
    Route::get('/predial/cancelaciones', Cancelaciones::class)->name('predial.cancelaciones');
    // --------------/REGLAMENTOS -------------------
    Route::get('/reglamentos/principal', ReglamentosPrincipal::class)->name('reglamentos.principal');
    // --------------/REGLAMENTOS -> INSPECTOR ------
    Route::get('/reglamentos/inspector', PreRegistrationLicense::class)->name('reglamentos.inspector.registro');
    Route::get('/reglamentos/historial', ReglamentosInspectorHistorial::class)->name('reglamentos.inspector.historial');
    Route::get('/reglamentos/maps', ReglamentosInspectorMaps::class)->name('reglamentos.inspector.maps');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
