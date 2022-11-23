<?php

namespace App\Http\Controllers;

use App\Jugadores;
use App\Usuarios;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
   
    public function index()
    {
        //pagina de inicio
        $datos = Usuarios::all();
        return view('jugadoreslista', compact('datos'));

    }


    public function create()
    {
        // formulario dnd se agregan los datos
        return view('/admin/jugador/crearjugador');
    }

    
    public function store(Request $request)
    {
        //sirve para guardar datos en la base de datos
        $jugadores = new Usuarios();
        $jugadores->apellido_paterno = $request -> post('apellido_paterno');
        $jugadores->apellido_materno = $request -> post('apellido_materno');
        $jugadores->nombre = $request -> post('nombre');
        $jugadores->nombre_usuario = $request -> post('nombre');
        $jugadores->contraseña = $request -> post('nombre');
        $jugadores->email = $request -> post('nombre');
        $jugadores->habilitado = $request -> post('id_categoria');
        $jugadores->foto = $request -> post('foto');
        $jugadores->nro_camiseta = $request -> post('nro_camiseta');
        $jugadores->fecha_nacimiento = $request -> post('fecha_nacimiento');
        $jugadores->sexo_usuarios = $request -> post('sexo_usuarios');
        $jugadores->celular = $request -> post('celular');
        $jugadores->pais_usuarios = $request -> post('pais_usuarios');
        $jugadores->id_equipo = $request -> post('id_equipo');
        $jugadores->posicion = $request -> post('posicion');
        $jugadores->tipo_usuario = $request -> post('id_equipo');
        $jugadores->id_categoria = $request -> post('id_categoria');
        $jugadores->habilitado = $request -> post('habilitado');
        $jugadores->save();

        return redirect()->route('jugadores.create')-> with('Success','Agregado con exito!');
    }


    public function show(Jugadores $jugadores)
    {
        //para obtener un registro de nuestra tabla
        return view('/admin/jugador/eliminarjugador');
    }

 
    public function edit(Jugadores $jugadores)
    {
        // para traer los datos que se van a editar
        $datos = Usuarios::all();
        return view('/admin/jugador/editarjugador',compact('datos'));
    }


    public function update(Request $request, Jugadores $jugadores)
    {
        // actualiza los datos en la base datos
    }


    public function destroy(Jugadores $jugadores)
    {
        //elimina un registro
    }
}
