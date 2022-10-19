<?php

namespace App\Http\Livewire\Paciente;

use Livewire\Component;

class Store extends Component
{
    public $paginaAtual = 1;
    public $nome;
    public $sobrenome;
    public $cpf;
    public $rg;
    public $rg_emissor;
    public $nacionalidade;
    public $cartao_sus;
    public $data_nascimento;
    public $estado_civil = '';
    public $genero = '';
    public $tipo_sanguineo = '';
    public $email;
    public $foto;
    public $telefone;
    public $responsavel;
    public $nome_pai;
    public $nome_mae;
    public $cep;
    public $logradouro;
    public $numero;
    public $bairro;
    public $complemento;
    public $cidade;
    public $estado;
    public $paginas = [
        1 => [
            'titulo' => 'Dados Pessoais',
            'descricao' => 'Preeencha o formulário com as informaçoes pessoais.'
        ],
        2 => [
            'titulo' => 'Endereço',
            'descricao' => 'Preencha o formulário.'
        ],
        3 => [
            'titulo' => 'Confirme os dados',
            'descricao' => 'Preencha o formulário.'
        ]
    ];

    private $validationRules = [
        1 => [
            'nome' => ['required']
        ],
        2 => [
            'cep' => ['required']
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->paginaAtual]);
    }

    public function nextStep()
    {
        $this->validate($this->validationRules[$this->paginaAtual]);
        $this->paginaAtual++;
    }

    public function prevStep()
    {
        $this->paginaAtual--;
    }

    public function store()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();
        $this->validate($rules);
        dd('oi');
    }

    public function render()
    {
        return view('livewire.paciente.store');
    }
}
