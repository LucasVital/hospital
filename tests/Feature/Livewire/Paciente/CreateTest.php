<?php

use App\Models\Paciente;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Livewire\livewire;

beforeEach(function () {
    $user = User::factory()->create();

    actingAs($user);
});

it('paciente data should be required', function () {
    livewire(\App\Http\Livewire\Paciente\Create::class)
        ->set('nome', '')
        ->set('sobrenome', '')
        ->call('save')
        ->assertHasErrors([
            'nome' => 'required',
            'sobrenome' => 'required',
        ]);
});

it('should be able to create a new paciente', function () {

    livewire(App\Http\Livewire\Paciente\Create::class)
        ->set('nome', 'Lucas')
        ->set('sobrenome', 'Pedreira Vital')
        ->set('cpf', '938.800.092-79')
        ->set('rg', '29.714.873-4')
        ->set('rg_emissor', 'SSP/RO')
        ->set('nacionalidade', 'brasileira')
        ->set('cartao_sus', '987 5678 0987 9879')
        ->set('data_nascimento', '1984-03-03')
        ->set('estado_civil', 'Casado (a)')
        ->set('genero', 'Masculino')
        ->set('tipo_sanguineo', 'O+')
        ->set('email', 'lucasvital@outlook.com')
        ->set('foto', 'foto.png')
        ->set('telefone', '(69) 99332-9317')
        ->set('responsavel', 'Sabrina Leviski')
        ->set('nome_pai', 'Nome do pai')
        ->set('nome_mae', 'Nome da pai')
        ->set('cep', '64005-545')
        ->set('logradouro', 'Rua Beco-05')
        ->set('numero', '3456')
        ->set('bairro', 'Setor da Torre')
        ->set('complemento', 'complemento do endereço')
        ->set('cidade', 'Teresina')
        ->set('estado', 'PI')
        ->call('save')
        ->assertHasErrors();
    assertDatabaseCount(Paciente::class, 1);

});


