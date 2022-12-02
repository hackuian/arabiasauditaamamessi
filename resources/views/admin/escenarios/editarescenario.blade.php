@extends('./../admin/plantillaadmin/mainadmin')
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
                <th>Editar</th>
                  
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
                      
                    <td> 
                        
                        <form action="{{ route("jugadores.editar", $item->id)  }}" method="GET">
                        <Button class="btn btn-warning btn-sm">
                            <span class=" fas fa-user-edit"></span>
                        </Button>
                        </form>

                    </td>
                    
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