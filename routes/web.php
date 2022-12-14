<?php

use App\Http\Livewire\Paciente;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function(){

    Route::get('/cadastrar', function(){
        return view('paciente.create');
    })->name('paciente.create');

    Route::get('/{paciente}/editar', function(){
        return view('paciente.edit');
    })->name('paciente.edit');


    Route::get('/', Paciente\Index::class)->name('paciente.index');
});


require __DIR__.'/auth.php';
