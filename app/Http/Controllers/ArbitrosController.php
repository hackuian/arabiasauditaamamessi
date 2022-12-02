<?php

namespace App\Http\Controllers;
use App\Arbitros;
use App\Usuarios;
use App\Jugadores;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArbitrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pagina de inicio
        $datos = Usuarios::where('tipo_usuario', 2)->get();
        return view('arbitroslista', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // formulario dnd se agregan los datos
        return view('/admin/arbitros/creararbitro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //sirve para guardar datos en la base de datos
        $arbitros = new Usuarios();
        $arbitros->apellido_paterno = $request -> post('apellido_paterno');
        $arbitros->apellido_materno = $request -> post('apellido_materno');
        $arbitros->nombre = $request -> post('nombre');
        $arbitros->nombre_usuario = $request -> post('nombre');
        $arbitros->contraseña = $request -> post('nombre');
        $arbitros->email = $request -> post('nombre');
        $arbitros->habilitado = $request -> post('id_categoria');

        if($request->hasfile("foto")){
            $foto = $request->file("foto");
            $nombrefoto = Str::slug($request->fecha_nacimiento).".".$foto->guessExtension();
            $ruta = public_path("/assets/img/Fotos/");
            $foto->move($ruta,$nombrefoto);
            $arbitros->foto = $request -> post('foto');
            
        }
        $arbitros->foto = $request -> post('foto');
        $arbitros->nro_camiseta = $request -> post('nro_camiseta');
        $arbitros->fecha_nacimiento = $request -> post('fecha_nacimiento');
        $arbitros->sexo_usuarios = $request -> post('sexo_usuarios');
        $arbitros->celular = $request -> post('celular');
        $arbitros->pais_usuarios = $request -> post('pais_usuarios');
        $arbitros->id_equipo = $request -> post('id_equipo');
        $arbitros->posicion = $request -> post('posicion');
        $arbitros->tipo_usuario = $request -> post('id_equipo');
        $arbitros->id_categoria = $request -> post('id_categoria');
        $arbitros->habilitado = $request -> post('habilitado');
        $arbitros->save();

        return redirect()->route('arbitros.create')-> with('Success', "Agregado con exito!");
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\arbitros  $arbitros
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //para obtener un registro de nuestra tabla
       // $arbitro = Usuarios::find($id);
        
       //return view('/admin/arbitro/eliminararbitro',compact('arbitro'));
        
    }

 
    public function edit(arbitros $arbitros)
    {
       
        $datos = Usuarios::where('tipo_usuario', 2)->get();
        return view('/admin/arbitros/editararbitro',compact('datos'));
    }

    public function editar($id)
    {
        // para traer los datos que se van a editar
       $arbitro = Usuarios::find($id);
        return view('/admin/arbitros/editararbitro2',compact('arbitro'));
    }

    public function update(Request $request, $id)
    {
        // actualiza los datos en la base datos
        $arbitro = Usuarios::find($id);
        $arbitro->apellido_paterno = $request -> post('apellido_paterno');
        $arbitro->apellido_materno = $request -> post('apellido_materno');
        $arbitro->nombre = $request -> post('nombre');
        $arbitro->nombre_usuario = $request -> post('nombre');
        $arbitro->contraseña = $request -> post('nombre');
        $arbitro->email = $request -> post('nombre');
        $arbitro->habilitado = $request -> post('id_categoria');

        if($request->hasfile("foto")){
            $foto = $request->file("foto");
            $nombrefoto = Str::slug($request->fecha_nacimiento).".".$foto->guessExtension();
            $ruta = public_path("/assets/img/Fotos/");
            $foto->move($ruta,$nombrefoto);
            $arbitro->foto = $request -> post('foto');
            
        }
        $arbitro->foto = $request -> post('foto');
        $arbitro->nro_camiseta = $request -> post('nro_camiseta');
        $arbitro->fecha_nacimiento = $request -> post('fecha_nacimiento');
        $arbitro->sexo_usuarios = $request -> post('sexo_usuarios');
        $arbitro->celular = $request -> post('celular');
        $arbitro->pais_usuarios = $request -> post('pais_usuarios');
        $arbitro->id_equipo = $request -> post('id_equipo');
        $arbitro->posicion = $request -> post('posicion');
        $arbitro->tipo_usuario = $request -> post('tipo_usuario');
        $arbitro->id_categoria = $request -> post('id_categoria');
        $arbitro->habilitado = $request -> post('habilitado');
        $arbitro->save();

        return redirect()->route('arbitros.create')-> with('Success', "Actualizado con exito!");

    }


    public function destroy(arbitros $arbitros)
    {       
        $datos = Usuarios::where('tipo_usuario', 2)->get();
        return view('/admin/arbitros/eliminararbitro',compact('datos'));
    }
    public function destroy2($id)
    {
        $arbitro = Usuarios::find($id);
        $arbitro->delete();
        return redirect()->route('arbitros.destroy')-> with('Success', "Eliminado con exito!");
    }
}
