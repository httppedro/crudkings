<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Notas', function (Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->string('idade');
            $table->string('data_da_compra');
            $table->string('nome_produto');
            $table->string('endereco');
            $table->string('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('país');
            $table->string('nota');
            $table->string('observacao');
            $table->string('situacao');
            $table->string('email');
            $table->string('created_at');
            $table->string('updated_at');
        });

        schema::create('admin_usr', function (Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->string('login');
            $table->string('senha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
