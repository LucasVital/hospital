<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->firstName,
            'sobrenome' => fake()->lastName,
            'cpf' => fake()->cpf,
            'rg' => fake()->rg(false),
            'rg_emissor' => 'SSP/'.fake()->stateAbbr,
            'nacionalidade' => 'brasileira',
            'cartao_sus' => fake()->localIpv4,
            'data_nascimento' => fake()->date,
            'estado_civil' => fake()->randomElement(['Casado (a)', 'Solteiro (a)', 'União Estável', 'Divorciado (a)', 'Viúvo (a)']),
            'genero' => fake()->randomElement(['Masculino', 'Feminino']),
            'tipo_sanguineo' => fake()->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB', 'O+', '0-']),
            'email' => fake()->safeEmail,
            'foto' => 'https://randomuser.me/api/portraits/women/'.fake()->numberBetween(20, 100).'.jpg',
            'telefone' => fake()->cellphoneNumber,
            'responsavel' => fake()->name,
            'nome_pai' => fake()->name('male'),
            'nome_mae' => fake()->name('female'),
            'cep' => fake()->postcode,
            'logradouro' => fake()->streetAddress,
            'numero' => fake()->buildingNumber,
            'bairro' => fake()->sentence(2),
            'complemento' => fake()->sentence(3),
            'cidade' => fake()->city,
            'estado' => fake()->state,
            'user_id' => User::factory(),
        ];
    }
}
