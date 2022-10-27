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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/', \App\Http\Livewire\Paciente\Index::class)->name('paciente.index');
    Route::get('/pacientes/cadastrar', \App\Http\Livewire\Paciente\Create::class)->name('paciente.create');
});


require __DIR__.'/auth.php';
