<?php
namespace App\Http\Livewire\Paciente;

use App\Http\Livewire\Paciente\Steps\EnderecoStepComponent;
use App\Http\Livewire\Paciente\Steps\FotoStepComponent;
use App\Http\Livewire\Paciente\Steps\ParenteStepComponent;
use App\Http\Livewire\Paciente\Steps\PessoalStepComponent;
use App\Models\Paciente;
use Spatie\LivewireWizard\Components\WizardComponent;

class PacienteWizardComponent extends WizardComponent
{
    public $paciente = [];

    public function steps() : array
    {
        return [
            PessoalStepComponent::class,
            ParenteStepComponent::class,
            EnderecoStepComponent::class,
            FotoStepComponent::class

        ];
    }

    public function mount(Paciente $paciente)
    {
       $this->paciente = $paciente;
    }

    public function initialState(): array
    {
        return [
            'pessoal' => [
                'nome' => $this->paciente['nome'],
                'sobrenome' => $this->paciente['sobrenome'],
                'email' => $this->paciente['email'],
                'telefone' => $this->paciente['telefone'],
                'cpf' => $this->paciente['cpf'],
                'rg' => $this->paciente['rg'],
                'rg_emissor' => $this->paciente['rg_emissor'],
                'nacionalidade' => $this->paciente['nacionalidade'],
                'cartao_sus' => $this->paciente['cartao_sus'],
                'data_nascimento' => $this->paciente['data_nascimento'],
                'estado_civil' => $this->paciente['estado_civil'],
                'genero' => $this->paciente['genero'],
                'tipo_sanguineo' => $this->paciente['tipo_sanguineo'],
                'peso' => $this->paciente['peso'],
                'altura' => $this->paciente['altura'],
                'paciente_id' => $this->paciente['id'],
            ],
            'parente' => [
                'nome_mae' => $this->paciente['nome_mae'],
                'nome_pai' => $this->paciente['nome_pai'],
                'responsavel' => $this->paciente['responsavel'],
            ],
            'endereco' => [
                'cep' => $this->paciente['cep'],
                'logradouro' => $this->paciente['logradouro'],
                'numero' => $this->paciente['numero'],
                'bairro' => $this->paciente['bairro'],
                'complemento' => $this->paciente['complemento'],
                'cidade' => $this->paciente['cidade'],
                'estado' => $this->paciente['estado'],
            ],
            'foto' => [
                'foto' => $this->paciente['foto'],
                'foto_edit' => $this->paciente['id'],
            ]
        ];
    }
}
