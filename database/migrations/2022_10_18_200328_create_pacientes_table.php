<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
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
            $table->string('nacionalidade')->nullable();
            $table->string('cartao_sus')->nullable();
            $table->date('data_nascimento');
            $table->enum('estado_civil', ['Casado(a)', 'Solteiro(a)', 'União Estável', 'Divorciado(a)', 'Viúvo(a)']);
            $table->enum('genero', ['Masculino', 'Feminino']);
            $table->enum('tipo_sanguineo', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-', null])->nullable();
            $table->string('email')->nullable();
            $table->string('peso')->nullable();
            $table->string('altura')->nullable();
            $table->string('foto')->nullable();
            $table->string('telefone')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('complemento')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->foreignId('user_id')->index();
            $table->timestamps();
            $table->softDeletes();
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
