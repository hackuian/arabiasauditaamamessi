<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->String('apellido_paterno');
            $table->String('apellido_materno');
            $table->String('foto');
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('tipo_usuario')->unsigned(); 
            $table->foreign('tipo_usuario')->references('id_tipo')->on('tipo_usuario');
            $table->String('posicion');
            $table->integer('nro_camiseta');
            $table->unsignedBigInteger('id_categoria')->unsigned(); 
            $table->foreign('id_categoria')->references('id_categ')->on('categorias');
            $table->unsignedBigInteger('id_equipo')->unsigned();
            $table->foreign('id_equipo')->references('id_equip')->on('equipos');
            $table->String('nombre_usuario')->unique();
            $table->String('contraseña');
            $table->String('email')->unique();
            $table->String('pais_usuarios');
            $table->String('sexo_usuarios');
            $table->integer('celular')->unique();
            $table->boolean('habilitado');
            $table->timestamp('creado_por')->nullable();
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
        Schema::dropIfExists('usuarios');
        
    }
}
