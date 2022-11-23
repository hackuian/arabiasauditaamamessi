@extends('plantilla.main')
@section('hojasEstilo')
@endsection
@section('contenido')
        <div class="card">
        <div class="card-header">
            Listado de Jugadores 
        </div>
          <!-- {{ print_r($datos ?? "") }}-->
        <div class="card-body">
            <h5 class="card-title">Habilitados </h5>
            <p>
             <!--<a href="{{route('jugadores.create')}}" class="btn btn-primary">Agregar Jugador</a>-->
            </p>
            <hr>
            
            <div class="table table-responsive">
                <table class="table table-sm table-bordered" >
                    <thead>
                    <th>Equipo</th>   
                    <th>Apellido Paterno</th>   
                    <th>Apellido Materno</th>   
                    <th>Nombres</th>   
                    <th>Fecha de Nacimiento</th>
                    <th>Categoria</th>    
                    <th>Foto</th>
                        
                    </thead>
                    <tbody>
                      @foreach ($datos as $item)
                      <tr>
                        <td>{{ $item->id_equipo}}</td>
                        <td>{{ $item->apellido_paterno}}</td>
                        <td>{{ $item->apellido_materno}}</td>
                        <td>{{ $item->nombre}}</td>
                        <td>{{ $item->fecha_nacimiento}}</td>
                        <td>{{ $item->id_categoria}}</td>
                        <td>{{ $item->foto}}</td>
                        
                      </tr>
                        @endforeach 
                    </tbody>

                </table>


            </div>

            
            
        </div>
        </div>





@endsection
@section('script')
@endsection