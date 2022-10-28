<?php

namespace App\Http\Livewire\Paciente\Steps;

use Illuminate\Contracts\View\View;
use Spatie\LivewireWizard\Components\StepComponent;

class EnderecoStepComponent extends StepComponent
{

    public $cep;
    public $logradouro;
    public $numero;
    public $bairro;
    public $complemento;
    public $cidade;
    public $estado;

    public $uploadFoto;

    protected function rules()
    {
        return [
            'cep' => ['required', 'max:10'],
            'logradouro' => ['required', 'max:150'],
            'numero' => ['required', 'max:10'],
            'bairro' => ['required', 'max:100'],
            'cidade' => ['required', 'max:100'],
            'estado' => ['required', 'max:2']
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function stepInfo(): array
    {
        return [
            'title' => 'Endereço do paciente',
        ];
    }

    public function render(): View
    {
        return view('livewire.paciente.steps.endereco');
    }
}
