<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id_equip');
            $table->string('nombre_equip');
            $table->string('pais_equip');
            $table->string('ciudad_equip');
            $table->string('nombre_corto_equip');
            $table->string('logotipo_equip');
            $table->string('voucher');
            $table->boolean('habilitado_equip');
            
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
        Schema::dropIfExists('equipos');
    }
}
