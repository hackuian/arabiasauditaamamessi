@extends('admin.plantillaadmin.mainadmin')
@section('hojasEstilo')
@endsection
@section('contenido')


<div class="card">
    <div class="card-header">
        Listado de Jugadores 
    </div>
      
    <div class="card-body">
        <h5 class="card-title">Eliminar Un registro</h5>
        <div>
            Esta apunto de elimnar un registro porfavor ten en cuenta que solo el administrador del sistema podra deshacer esta acción
          </div>
          <div class="col-sm-12">
            @if ($mensaje =Session::get('Success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
             @endif
        </div>
                <hr>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            
           
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
                            <form action="{{ route("jugadores.destroy2", $item->id)  }}" method="post">
                                @csrf
                                @method ('DELETE')
                            <Button class="btn btn-danger btn-sm">
                                <span class=" fas fa-user-times"></span>
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
    </div>


  
   

@endsection
@section('script')
@endsection