<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_tour', function (Blueprint $table) {
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
            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')->on('tours');
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
        Schema::drop('reserva_tour');
    }
}
