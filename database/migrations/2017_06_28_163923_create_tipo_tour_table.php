<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_tour', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);//Nombre del tipo de tour: Polaris o Slingshot
            $table->integer('cant_max');//Cantidad maxima del tipo tour
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
        Schema::drop('tipo_tour');
    }
}
