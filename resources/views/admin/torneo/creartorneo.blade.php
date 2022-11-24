@extends('plantilla.main')

@section('hojasEstilo')
	<link rel="stylesheet" href="plugins/bootstrap-datetimepicker-4.17.47/css/bootstrap-datetimepicker.min.css">
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    @endsection




@section('contenido')
	<div class="col-md-10 col-md-offset-1 panel panel-default">
		<header class="text-center">
			<h1>Pre-registro de equipos</h1>
		</header>

		<div class="col-md-8 col-md-offset-2">
			<form class="card-block" method="post" enctype="multipart/form-data">
				<div class="panel panel-default">
					
                <h3>Datos del delegado</h3>
                    <div class="panel-body">
		                
                        <div class="form-group">
                            <label for="nombre">Nombres</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                        </div>

						<div class="form-group">
        		            <label for="apellidos">Apellido Paterno</label>
		                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellidos" value="{{ old('apellidos') }}">
                        </div>
                        
                        <div class="form-group">
        		            <label for="apellidos">Apellido Materno</label>
		                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellidos" value="{{ old('apellidos') }}">
                        </div>

                        <div class="form-group">
							<label for="ruta_imagen">Foto</label>
		                    <input type="file" class="form-control filestyle" id="ruta_imagen" name="ruta_imagen" data-buttonName="btn-primary" data-buttonText="Seleccionar" data-size="sm" placeholder="Imagen">

						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="fecha_ini">Fecha de nacimiento</label>
									<div class='input-group date' id='fecha_ini'>
										<input type="text" class="form-control" id="fecha_ini" name="fecha_ini" placeholder="Fecha Inicio" value="{{ old('fecha_ini') }}">

										<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>
						</div>
                        
                        <div class="form-group">
                            <label for="nombre">Usuario</label>
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre Nick o Usuario que desee usar para ingresar al sistema" value="{{ old('nombre') }}">
                        </div>

                        <div class="form-group">
                            <label for="nombre">Contraseña</label>
                            <input type="text" class="form-control" id="nombre" name="contraseña" placeholder="contraseña" value="{{ old('nombre') }}">
                        </div>

                        <div class="form-group">
		                    <label for="email">correo</label>
		                    <input type="text" class="form-control" id="correo_doc" name="correo_doc" placeholder="correo electrónico" value="{{ old('correo_doc') }}">
					    </div>

                        <div class="form-group">
							<label for="tipo_evento">Sexo</label>
							<select class="form-control" name="tipo_evento">
								<option value="" disabled selected>Seleccione uno porfavor</option>
								<option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
							</select>
						</div>
   
                        <div class="form-group">
		                    <label for="email">Celular</label><br>
		                     <form id="login" onsubmit="process(event)">
                                
                                <input id="phone" type="tel" name="phone" placeholder="777 12345"/>
                                
                             </form>
                             <div class="alert alert-info" style="display: none;"></div>

         
                             <div class="form-group">
							<label for="tipo_evento">Nacionalidad</label>
							<select class="form-control" name="tipo_evento">
								<option value="" disabled selected>Seleccione uno porfavor</option>
								<option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
							</select>
						    </div>
                        </div>
                    </div>
                    <h3 >Datos del equipo</h3>
					<div class="panel-body">       
                        
                        <div class="form-group">
                            <label for="nombre">Nombre del equipo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo del equipo" value="{{ old('nombre') }}">
                        </div>
                        <div class="form-group">
							<label for="tipo_evento">Pais del equipo</label>
                            <input type="text" class="form-control" id="correo_doc" name="correo_doc" placeholder="Pais del equipo" value="{{ old('correo_doc') }}">
					    
						</div>

                        <div class="form-group">
							<label for="tipo_evento">Ciudad del equipo</label>
                            <input type="text" class="form-control" id="correo_doc" name="correo_doc" placeholder="Ciudad del equipo" value="{{ old('correo_doc') }}">
					    </div>

                        <div class="form-group">
							<label for="tipo_evento">Cuantas categorias inscribira el equipo</label>
                            <input type="text" class="form-control" id="correo_doc" name="correo_doc" placeholder="Numero de categorias" value="{{ old('correo_doc') }}">
					    </div>




                        <div class="form-group">
							<label for="ruta_imagen">Foto del Vaucher de deposito</label>
		                    <input type="file" class="form-control filestyle" id="ruta_imagen" name="ruta_imagen" data-buttonName="btn-primary" data-buttonText="Seleccionar" data-size="sm" placeholder="Imagen">
						</div>







					</div>







					<div class="panel-footer">
						<div class="row text-center" style="color:white;">
							<div class="col-md-6">
								<button type="submit" class="btn btn-primary">Aceptar</button>
							</div>

							<div class="col-md-6">
								<a href="/" class="btn btn-primary">Cancelar</a>
							</div>
							<br>
							<br>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection

@section('script')
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
   </script>
   <script>
   function getIp(callback) {
 fetch('https://ipinfo.io/json?token=<your token>', { headers: { 'Accept': 'application/json' }})
   .then((resp) => resp.json())
   .catch(() => {
     return {
       country: 'us',
     };
   })
   .then((resp) => callback(resp.country));
}

const phoneInput = window.intlTelInput(phoneInputField, {
 initialCountry: "auto",
 geoIpLookup: getIp,
 utilsScript:
   "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

 </script>
 @endsection