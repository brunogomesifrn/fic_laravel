<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('resumo');
            $table->integer('carga_horaria');
            $table->string('duracao');
            $table->date('data_inicio');
            $table->integer('vagas');
            $table->string('foto');

            $table->bigInteger('area_id')->unsigned()->nullable();
            $table->foreign('area_id')->references('id')->on('areas');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');


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
        Schema::dropIfExists('cursos');
    }
}
