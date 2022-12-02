<?php

namespace App\Http\Controllers;

use App\Jugadores;
use App\Usuarios;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

        if($request->hasfile("foto")){
            $foto = $request->file("foto");
            $nombrefoto = Str::slug($request->fecha_nacimiento).".".$foto->guessExtension();
            $ruta = public_path("/assets/img/Fotos/");
            $foto->move($ruta,$nombrefoto);
            $jugadores->foto = $request -> post('foto');
            
        }
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

        return redirect()->route('jugadores.create')-> with('Success', "Agregado con exito!");
    }


    public function show($id)
    {
        //para obtener un registro de nuestra tabla
       // $jugador = Usuarios::find($id);
        
       //return view('/admin/jugador/eliminarjugador',compact('jugador'));
        
    }

 
    public function edit(Jugadores $jugadores)
    {
       
        $datos = Usuarios::all();
        return view('/admin/jugador/editarjugador',compact('datos'));
    }

    public function editar($id)
    {
        // para traer los datos que se van a editar
       $jugador = Usuarios::find($id);
        return view('/admin/jugador/editarjugador2',compact('jugador'));
    }

    public function update(Request $request, $id)
    {
        // actualiza los datos en la base datos
        $jugador = Usuarios::find($id);
        $jugador->apellido_paterno = $request -> post('apellido_paterno');
        $jugador->apellido_materno = $request -> post('apellido_materno');
        $jugador->nombre = $request -> post('nombre');
        $jugador->nombre_usuario = $request -> post('nombre');
        $jugador->contraseña = $request -> post('nombre');
        $jugador->email = $request -> post('nombre');
        $jugador->habilitado = $request -> post('id_categoria');

        if($request->hasfile("foto")){
            $foto = $request->file("foto");
            $nombrefoto = Str::slug($request->fecha_nacimiento).".".$foto->guessExtension();
            $ruta = public_path("/assets/img/Fotos/");
            $foto->move($ruta,$nombrefoto);
            $jugador->foto = $request -> post('foto');
            
        }
        $jugador->foto = $request -> post('foto');
        $jugador->nro_camiseta = $request -> post('nro_camiseta');
        $jugador->fecha_nacimiento = $request -> post('fecha_nacimiento');
        $jugador->sexo_usuarios = $request -> post('sexo_usuarios');
        $jugador->celular = $request -> post('celular');
        $jugador->pais_usuarios = $request -> post('pais_usuarios');
        $jugador->id_equipo = $request -> post('id_equipo');
        $jugador->posicion = $request -> post('posicion');
        $jugador->tipo_usuario = $request -> post('id_equipo');
        $jugador->id_categoria = $request -> post('id_categoria');
        $jugador->habilitado = $request -> post('habilitado');
        $jugador->save();

        return redirect()->route('jugadores.create')-> with('Success', "Actualizado con exito!");

    }


    public function destroy(Jugadores $jugadores)
    {
        $datos = Usuarios::all();
        return view('/admin/jugador/eliminarjugador',compact('datos'));
    }
    public function destroy2($id)
    {
        $jugador = Usuarios::find($id);
        $jugador->delete();
        return redirect()->route('jugadores.destroy')-> with('Success', "Eliminado con exito!");
    }
}
