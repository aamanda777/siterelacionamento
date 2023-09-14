<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarios extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('nome_usuario')->unique();
            $table->enum('genero', ['Masculino', 'Feminino', 'Outro']);
            $table->enum('preferencia_genero', ['Masculino', 'Feminino', 'Ambos']);
            $table->string('preferencia_idade');
            $table->string('email')->unique();
            $table->date('data_nascimento');
            $table->string('senha');
            $table->string('estado');
            $table->string('cidade'); // Coluna para armazenar a cidade
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

