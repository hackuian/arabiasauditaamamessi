
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
			<h1>Registro De Equipos</h1>
		</header>

		<div class="col-md-8 col-md-offset-2">
			<form class="card-block" method="post" enctype="multipart/form-data">
				<div class="panel panel-default">
					
                <h3>Registrar Equipo</h3>
                    <div class="panel-body">
                         
                      
                        <div class="form-group">
                            <label for="nombre">Nombre Corto</label>
                            <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" placeholder="Nombre Crto del Equipo" value="{{ old('nombreCorto') }}">
                        </div>

               
                        <div class="form-group">
							<label for="ruta_imagen">Logo</label>
		                    <input type="file" class="form-control filestyle" id="ruta_imagen" name="ruta_imagen" data-buttonName="btn-primary" data-buttonText="Seleccionar" data-size="sm" placeholder="Imagen">

						</div>
		                
                                    
                        <div class="form-group">
                            <div class="form-group">
                                <label for="categoria">Selecione Categoria</label>

                                <form>
                                    <br>
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1"> Sub 30</label><br>
                                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                    <label for="vehicle2"> Sub 40</label><br>
                                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                    <label for="vehicle3"> Sub 50</label>
                                  </form>
                            </div>
                             <div class="alert alert-info" style="display: none;"></div>

         
                             
                        </div>
                    </div>
                   



					<div class="panel-footer">
						<div class="row text-center" style="color:white;">
							<div class="col-md-6">
								<button type="submit" class="btn btn-primary">Aceptar</button>
							</div>

							<div class="col-md-6">
								<a href="/" class="btn btn-danger">Cancelar</a>
							</div>
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