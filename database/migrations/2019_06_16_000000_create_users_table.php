<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_funcao')->unsigned()->nullable()->index();
            $table->foreign('id_funcao')->references('id')->on('funcaos')->onUpdate('cascade');
            $table->integer('codigo_orgao')->unsigned()->index();
            $table->foreign('codigo_orgao')->references('codigo')->on('orgaos')->onUpdate('cascade');
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->string('password')->default(Hash::make('123456'));
            $table->string('cpf', 15)->index();
            $table->string('matricula', 15)->index();
            $table->string('telefone', 15);
            $table->enum('solicita_conta', ['S','N','A'])->nullable();
            $table->enum('ativo', ['S','N'])->default('N');
            $table->rememberToken();
            $table->dateTime('ultimo_acesso')->nullable();
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
        Schema::dropIfExists('users');
    }
}
