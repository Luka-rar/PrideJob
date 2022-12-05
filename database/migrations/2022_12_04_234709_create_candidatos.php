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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->string('nome_completo');
            $table->string('cpf');
            $table->string('rg');
            $table->string('uf_rg');
            $table->string('orgao_emissor');
            $table->string('data_emissao');
            $table->string('genero');
            $table->string('etnia');
            $table->string('data_nascimento');
            $table->string('uf_nascimento');
            $table->string('estado_civil');
            $table->string('nome_mae');
            $table->string('nome_pai');
            $table->string('celular');
            $table->string('telefone');
            $table->string('email');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
};
