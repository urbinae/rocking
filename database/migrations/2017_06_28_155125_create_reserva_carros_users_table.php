<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaCarrosUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_carros_users', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_reserva');
            $table->date('desde');
            $table->time('hora_desde');
            $table->date('hasta');
            $table->time('hora_hasta');
            $table->integer('cantidad');
            $table->double('costo');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('carros_golf_id')->unsigned();
            $table->foreign('carros_golf_id')->references('id')->on('carros_golf');
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
        Schema::drop('reserva_carros_users');
    }
}
