<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('cpf');
            $table->string('rg');
            $table->string('rg_emissor');
            $table->string('nacionalidade');
            $table->string('cartao_sus')->nullable();
            $table->date('data_nascimento');
            $table->enum('estado_civil', ['Casado (a)', 'Solteiro (a)', 'União Estável', 'Divorciado (a)', 'Viúvo (a)']);
            $table->enum('genero', ['Masculino', 'Feminino']);
            $table->string('tipo_sanguineo');
            $table->string('email')->nullable();
            $table->string('foto')->nullable();
            $table->string('telefone')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('complemento')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};
