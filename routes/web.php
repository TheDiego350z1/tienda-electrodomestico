<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('ventas', App\Http\Livewire\Ventas::class)->name('ventas');
    Route::get('vendedores', App\Http\Livewire\Reportes\Vendedores::class)->name('vendedores');
    Route::get('reporte-ventas', App\Http\Livewire\Reportes\Ventas::class)->name('reporte.ventas');
    Route::get('clientes', App\Http\Livewire\Reportes\Clientes::class)->name('clientes');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
