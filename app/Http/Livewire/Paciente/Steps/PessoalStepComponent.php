<?php

namespace App\Http\Livewire\Paciente\Steps;

use App\Models\Paciente;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Spatie\LivewireWizard\Components\StepComponent;

class PessoalStepComponent extends StepComponent
{

    public $paciente_id;
    public $nome;
    public $sobrenome;
    public $cpf;
    public $telefone;
    public $rg;
    public $rg_emissor;
    public $nacionalidade;
    public $cartao_sus;
    public $data_nascimento;
    public $estado_civil = '';
    public $genero = '';
    public $tipo_sanguineo = '';
    public $email;
    public $peso;
    public $altura;

    protected function rules()
    {
        return [
            'nome' => ['required', 'string', 'min:3', 'max:50'],
            'sobrenome' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['nullable', 'email'],
            'telefone' => ['nullable', 'celular_com_ddd'],
            'cpf' => ['required', 'cpf', Rule::unique('pacientes', 'cpf')->ignore((int)$this->paciente_id)],
            'rg' => ['required', 'max:50', Rule::unique('pacientes', 'rg')->ignore((int)$this->paciente_id)],
            'rg_emissor' => ['required', 'max:100'],
            'nacionalidade' => ['nullable', 'string', 'max:50'],
            'cartao_sus' => ['nullable', 'string', 'max:50'],
            'data_nascimento' => ['required', 'date'],
            'estado_civil' => ['required', 'max:50'],
            'genero' => ['required', 'max:50'],
            'tipo_sanguineo' => ['nullable'],
            'peso' => ['nullable'],
            'altura' => ['nullable'],
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
            'title' => 'Dados do pessoais',
        ];
    }

    public function render(): View
    {
        return view('livewire.paciente.steps.pessoal');
    }
}
