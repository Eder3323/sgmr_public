<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Prueba as Prueba;
use App\Livewire\Prueba2 as Prueba2;
use App\Livewire\Predial\PagosCancelaciones\Pagos as Pagos;
use App\Livewire\Predial\PagosCancelaciones\Cancelaciones as Cancelaciones;
use App\Livewire\Menu\Dashboard as Dashboard;
use App\Livewire\Reglamentos\ReglamentosEspectaculos\Principal as ReglamentosPrincipal;
use App\Livewire\Reglamentos\Inspector\PreRegistrationLicense as PreRegistrationLicense;


/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/prueba', Prueba::class)->name('prueba');

// --------------- PREDIAL ----------------------//
Route::get('/predial/pagos', Pagos::class)->name('predial.pagos');

Route::get('/predial/cancelaciones', Cancelaciones::class)->name('predial.cancelaciones');

// -------------- REGLAMENTOS --------------------------------------------//
Route::get('/reglamentos/principal', ReglamentosPrincipal::class)->name('reglamentos.principal');
Route::get('/reglamentos/inspector', PreRegistrationLicense::class)->name('reglamentos.inspector');



Route::get('/chatgpt', Prueba2::class)->name('chatgpt');

Route::get('/dashboard', Dashboard::class)
    ->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/dashboard', function () {
//    return livewire('livewire.menu.dashboardv'); // view('livewire.menu.dashboardv');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
