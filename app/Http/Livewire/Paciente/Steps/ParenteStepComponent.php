<?php

namespace App\Http\Livewire\Paciente\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class ParenteStepComponent extends StepComponent
{
    public $nome_mae;
    public $nome_pai;
    public $responsavel;

    protected function rules()
    {
        return [
            'nome_mae' => ['required', 'min:3', 'max:100'],
            'nome_pai' => ['nullable', 'string', 'min:3', 'max:100'],
            'responsavel' => ['nullable', 'string', 'min:3', 'max:100'],
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
            'title' => 'Dados dos pais',
        ];
    }

    public function render()
    {
        return view('livewire.paciente.steps.parente');
    }
}
