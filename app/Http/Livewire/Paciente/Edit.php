<?php

namespace App\Http\Livewire\Paciente;

use App\Models\Paciente;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, PacienteTrait;


    public $paginas = [
        1 => [
            'titulo' => 'Dados Pessoais',
            'descricao' => 'Preeencha o formulário com as informaçoes pessoais.'
        ],
        2 => [
            'titulo' => 'Dados Pessorais',
            'descricao' => 'Preeencha o formulário com as informaçoes.'
        ],
        3 => [
            'titulo' => 'Dados de endereço',
            'descricao' => 'Preencha o formulário.'
        ]
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function nextStep()
    {

        $this->paginaAtual++;
    }

    public function prevStep()
    {
        $this->paginaAtual--;
    }


    public function save()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);
    }

    public function mount()
    {
        $this->nome = $this->paciente['nome'];
        $this->sobrenome = $this->paciente['sobrenome'];
        $this->email = $this->paciente['email'];
        $this->telefone = $this->paciente['telefone'];
        $this->cpf = $this->paciente['cpf'];
        $this->rg = $this->paciente['rg'];
        $this->rg_emissor = $this->paciente['rg_emissor'];
        $this->nacionalidade = $this->paciente['nacionalidade'];
        $this->cartao_sus = $this->paciente['cartao_sus'];
        $this->data_nascimento = $this->paciente['data_nascimento'];
        $this->estado_civil = $this->paciente['estado_civil'];
        $this->genero = $this->paciente['genero'];
        $this->tipo_sanguineo = $this->paciente['tipo_sanguineo'];
        $this->altura = $this->paciente['altura'];
        $this->peso = $this->paciente['peso'];
    }

    public function render(): View
    {
        return view('livewire.paciente.steps.pessoal');
    }
}
