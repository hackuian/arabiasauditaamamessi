@extends('admin.plantillaadmin.mainadmin')
@section('hojasEstilo')
@endsection
@section('contenido')


<div class="card">
    <div class="card-header">
        Listado de Jugadores 
    </div>
      <!-- {{ print_r($datos ?? "") }}-->
    <div class="card-body">
        <h5 class="card-title">Eliminar Un registro</h5>
                <hr>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Esta apunto de elimnar el siguiente registro
            </div>
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
                     
                    </tbody>
    
                </table>
    
    
            </div>
           
        
        
        
        
        </div>
        <div class="panel-footer">
            <div class="row text-center" style="color:white;">
                <div class="col-md-6">
                    <button class="btn btn-warning">Eliminar</button>
                </div>

                <div class="col-md-6">
                    <a href="/administrador" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div> 
        

        
        
    </div>
    </div>


  
   

@endsection
@section('script')
@endsection