<?php

namespace App\Http\Livewire\Paciente;

use App\Models\Paciente;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;
use Usernotnull\Toast\Concerns\WireToast;

class Index extends Component
{
    use WithPagination, WireToast;

    public $searching;
    public $showConfirmModal = false;
    public $pacienteId;

    protected $queryString = ['searching' => ['except' => '', 'as' => 's']];

    public function updatingSearching()
    {
        $this->resetPage();
    }

    public function confirmDeletePaciente($id)
    {
        $this->pacienteId = $id;
            $this->showConfirmModal = true;
    }

    public function delete()
    {
        $paciente = Paciente::query()->find($this->pacienteId);

        $paciente->delete();

        $this->showConfirmModal = false;
        toast()
            ->success('Paciente removido com sucesso!')
            ->push();
    }

    public function render(): View
    {
        $pacientes = Search::add(Paciente::class, ['nome', 'sobrenome', 'cpf'])
            ->beginWithWildcard()
            ->endWithWildcard()
            ->orderByDesc()
            ->paginate()
            ->search($this->searching);

        return view('livewire.paciente.index', [
            'pacientes' => $pacientes
        ]);
    }
}
