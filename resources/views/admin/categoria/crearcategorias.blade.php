@extends('./../admin/plantillaadmin/mainadmin')
@section('hojasEstilo')
@endsection

@section('contenido')
	<div class="col-md-10 col-md-offset-1 panel panel-default">
		<header class="text-center">
			<h1>Registro Categorias</h1>
		</header>

		<div class="col-md-8 col-md-offset-2">
			<form class="card-block"  action="{{ route('categorias.store')}}"  method="POST">
                @csrf
				<div class="panel panel-default">
					
                <h3>Datos de la categoria</h3>
                    <div class="panel-body">
		                <form >
                        <div class="form-group">
                            <label for="nombre_categ">Nombre de la categoria</label>
                            <input type="text" class="form-control" id="nombre_categ" name="nombre_categ" placeholder="Nombre" >
                        </div>
                                                
                        <div class="form-group">
							<label for="ano_nacimiento_minimo">Año de Nacimiento Minimo</label>
		                    <input type="number" class="form-control" id="ano_nacimiento_minimo" name="ano_nacimiento_minimo" placeholder="1950" >

                        </div>   

                        
                        <div class="form-group">
							<label for="ano_nacimiento_maxima">Año de nacimiento maximo</label>
		                    <input type="number" class="form-control" id="ano_nacimiento_maxima" name="ano_nacimiento_maxima" placeholder="2022" >

                        </div>                
                   
         
                           
                                
                                 
                       
                        <div class="panel-footer">
                                <div class="row text-center" style="color:white;">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary">Aceptar</button>
                                    </div>

                                    <div class="col-md-6">
                                        <a href="/administrador" class="btn btn-danger">Cancelar</a>
                                    </div>
                                </div>
                        </div>
    				
                    </div>
			</form>
		</div>
	</div>




@endsection
@section('script')
@endsection