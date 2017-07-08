<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_fotos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precioxfoto');
            $table->string('nombre_grupo');
            $table->string('carpeta');//se crea y se asigna en el controlador
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
        Schema::drop('grupo_fotos');
    }
}
