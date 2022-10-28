<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Paciente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         \App\Models\User::factory(1)->create();
         Paciente::factory(1000)->create();

         \App\Models\User::factory()->create([
             'name' => 'Aluno IFRO',
             'email' => 'alunoifro@email.com',
             'password' => Hash::make('alunoifro')
         ]);
    }
}
