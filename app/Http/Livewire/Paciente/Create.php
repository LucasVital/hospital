<?php

namespace App\Http\Livewire\Paciente;

use App\Models\Paciente;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
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
            'nome' => ['required', 'string', 'min:3', 'max:50'],
            'sobrenome' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['nullable', 'email'],
            'telefone' => ['nullable', 'celular_com_ddd'],
            'cpf' => ['required', 'cpf', 'unique:pacientes'],
            'rg' => ['required', 'max:50', 'unique:pacientes'],
            'rg_emissor' => ['required', 'max:100'],
            'nacionalidade' => ['nullable', 'string', 'max:50'],
            'cartao_sus' => ['nullable', 'string', 'max:50'],
            'data_nascimento' => ['required', 'date'],
            'estado_civil' => ['required', 'max:50'],
            'genero' => ['required', 'max:50'],
            'tipo_sanguineo' => ['nullable', 'string']
        ],
        2 => [
            'foto' => ['nullable', 'image', 'size:1024'],
            'nome_mae' => ['required', 'min:3', 'max:100'],
            'nome_pai' => ['nullable', 'string', 'min:3', 'max:100']
        ],
        3 => [
            'cep' => ['required', 'max:10'],
            'logradouro' => ['required', 'max:150'],
            'numero' => ['required', 'max:10'],
            'bairro' => ['required', 'max:100'],
            'cidade' => ['required', 'max:100'],
            'estado' => ['required', 'max:2']
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->paginaAtual]);
    }

    public function nextStep()
    {
        if (isset($this->validationRules[$this->paginaAtual])) {
            $this->validate($this->validationRules[$this->paginaAtual]);
        }
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

        $filename = $this->foto->store('/', 'fotos');

        Paciente::query()->create([
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'rg_emissor' => $this->rg_emissor,
            'nacionalidade' => $this->nacionalidade,
            'cartao_sus' => $this->cartao_sus,
            'data_nascimento' => $this->data_nascimento,
            'estado_civil' => $this->estado_civil,
            'genero' => $this->genero,
            'tipo_sanguineo' => $this->tipo_sanguineo,
            'foto' => $filename,
            'nome_mae' => $this->nome_mae,
            'nome_pai' => $this->nome_pai,
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'numero' => $this->numero,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'user_id' => auth()->id()
        ]);

    }

    public function render(): View
    {
        return view('livewire.paciente.create');
    }
}
