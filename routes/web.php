<?php

use App\Http\Livewire\Configuracion;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Principal;
use App\Http\Livewire\Curso;
use App\Http\Livewire\Role;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);

require_once __DIR__ . '/fortify.php';
require_once __DIR__ . '/jetstream.php';
//configuracion
Route::get('configuracion', Configuracion::class, 'configuracion')
    ->name('configuracion')
    ->middleware('auth');
Route::get('principal', Principal::class, 'principal')
    ->name('principal')
    ->middleware('auth');

Route::get('curso', Curso::class, 'curso')->name('curso')->middleware('auth');

Route::get('configuracion', Configuracion::class, 'configuracion')->name('configuracion')->middleware('auth');
Route::get('role', Role::class, 'role')
    ->name('role')
    ->middleware('auth');

//imprimir PDF reporte
// Route::get('imprimirPdfLicencia/{id}', [App\Http\Livewire\Licencia::class, 'imprimirPdfLicencia'])->name('imprimirPdfLicencia');


