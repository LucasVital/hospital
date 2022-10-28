<?php

namespace App\Providers;

use App\Http\Livewire\Paciente\Steps\EnderecoStepComponent;
use App\Http\Livewire\Paciente\Steps\FotoStepComponent;
use App\Http\Livewire\Paciente\Steps\ParenteStepComponent;
use App\Http\Livewire\Paciente\Steps\PessoalStepComponent;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Livewire::component('pessoal', PessoalStepComponent::class);
        Livewire::component('parente', ParenteStepComponent::class);
        Livewire::component('endereco', EnderecoStepComponent::class);
        Livewire::component('foto', FotoStepComponent::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
