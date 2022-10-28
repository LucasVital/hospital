<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function edit(Paciente $paciente)
    {
        return view('paciente.edit', compact('paciente'));
    }
}

