<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){

    Route::get('/cadastrar', function(){
        return view('paciente.create');
    })->name('paciente.create');

    Route::get('/{paciente}/editar', function(){
        return view('paciente.edit');
    })->name('paciente.edit');

//    Route::get('/{paciente}/editar',[App\Http\Controllers\PacienteController::class, 'edit'])->name('paciente.edit');


    Route::get('/', \App\Http\Livewire\Paciente\Index::class)->name('paciente.index');
//    Route::get('/pacientes/cadastrar', \App\Http\Livewire\Paciente\Create::class)->name('paciente.create');
//    Route::get('/pacientes/{paciente}/editar', \App\Http\Livewire\Paciente\Edit::class)->name('paciente.edit');
});


require __DIR__.'/auth.php';
