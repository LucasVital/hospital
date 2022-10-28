<?php

namespace App\Http\Livewire\Paciente;

use App\Models\Paciente;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class Index extends Component
{
    use WithPagination;

    public $searching;

    protected $queryString = ['searching' => ['except' => '', 'as' => 's']];

    public function updatingSearching()
    {
        $this->resetPage();
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
