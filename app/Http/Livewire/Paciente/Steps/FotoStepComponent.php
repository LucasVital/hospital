<?php

namespace App\Http\Livewire\Paciente\Steps;

use App\Models\Paciente;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Spatie\LivewireWizard\Components\StepComponent;
use Usernotnull\Toast\Concerns\WireToast;

class FotoStepComponent extends StepComponent
{
    use WithFileUploads, WireToast;

    public $foto;
    public $uploadUpdate;
    public $foto_edit;

    protected function rules()
    {
        return [
            'foto' => ['nullable', 'image', 'max:1024'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $pessoal = $this->state()->forStep('pessoal');
        $parente = $this->state()->forStep('parente');
        $endereco = $this->state()->forStep('endereco');

        $filename = $this->foto;

        if (is_object($this->uploadUpdate)) {
            $this->deleteFoto();
            $filename = $this->uploadUpdate->store('/', 'fotos');
        }

        if (is_object($this->foto)) {
            $filename = $this->foto->store('/', 'fotos');
        }

        Paciente::query()->updateOrCreate(
            ['id' => (int)$this->foto_edit],
            [
                'nome' => $pessoal['nome'],
                'sobrenome' => $pessoal['sobrenome'],
                'cpf' => $pessoal['cpf'],
                'rg' => $pessoal['rg'],
                'rg_emissor' => $pessoal['rg_emissor'],
                'nacionalidade' => $pessoal['nacionalidade'],
                'cartao_sus' => $pessoal['cartao_sus'],
                'data_nascimento' => $pessoal['data_nascimento'],
                'estado_civil' => $pessoal['estado_civil'],
                'genero' => $pessoal['genero'],
                'tipo_sanguineo' => $pessoal['tipo_sanguineo'],
                'email' => $pessoal['email'],
                'peso' => $pessoal['peso'],
                'altura' => $pessoal['altura'],
                'telefone' => $pessoal['telefone'],
                'foto' => $filename ?? null,
                'nome_mae' => $parente['nome_mae'],
                'nome_pai' => $parente['nome_pai'],
                'responsavel' => $parente['responsavel'],
                'cep' => $endereco['cep'],
                'logradouro' => $endereco['logradouro'],
                'numero' => $endereco['numero'],
                'bairro' => $endereco['bairro'],
                'complemento' => $endereco['complemento'],
                'cidade' => $endereco['cidade'],
                'estado' => $endereco['estado'],
                'user_id' => auth()->id()
            ]);

        toast()
            ->success('Paciente cadastrado com sucesso!')
            ->pushOnNextPage();

        $this->redirect(route('paciente.index'));

    }

    public function deleteFoto()
    {
        if (is_null($this->foto)) {
            return;
        }

        Storage::disk('fotos')->delete($this->foto);

    }

    public function stepInfo(): array
    {
        return [
            'title' => 'Foto do paciente',
        ];
    }

    public function render(): View
    {
        return view('livewire.paciente.steps.foto');
    }
}
