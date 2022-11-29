<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partidoliga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidoliga', function (Blueprint $table) {
            $table->bigIncrements('id_equip_uno');
            $table->integer('id_equip_dos');
            $table->integer('id_ambiente');
            $table->time('hora');
            $table->date('fecha');
            $table->integer('resultado_equipo_uno');
            $table->integer('resultado_equipo_dos');
            $table->integer('id_arbitro');



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
        //
    }
}
