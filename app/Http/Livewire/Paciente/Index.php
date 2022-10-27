<?php

namespace App\Http\Livewire\Paciente;

use App\Models\Paciente;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.paciente.index', [
            'pacientes' => Paciente::query()->orderByDesc('updated_at')->paginate()
        ]);
    }
}
