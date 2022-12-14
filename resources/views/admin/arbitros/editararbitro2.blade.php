@extends('./../../admin/plantillaadmin/mainadmin')
@section('hojasEstilo')
 <!-- Bootstrap -->
 <link href="../../admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" integrity="sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- NProgress -->
 <link href="../../admin/vendors/nprogress/nprogress.css" rel="stylesheet">
 <!-- iCheck -->
 <link href="../../admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
 
 <!-- bootstrap-progressbar -->
 <link href="../../admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
 <!-- JQVMap -->
 <link href="../../admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
 <!-- bootstrap-daterangepicker -->
 <link href="../../admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

 <!-- Custom Theme Style -->
 <link href="../../admin/build/css/custom.min.css" rel="stylesheet">
@endsection

@section('contenido')
	<div class="col-md-10 col-md-offset-1 panel panel-default">
		<header class="text-center">
			<h1>Editar Jugador</h1>
		</header>

		
        
        <div class="col-md-8 col-md-offset-2">
			<form class="card-block"  action="{{ route('jugadores.update', $jugador->id)}}"  method="POST">
                @csrf
                @method("PUT")
				<div class="panel panel-default">
                        
                        <div class="col-sm-12">
                            @if ($mensaje =Session::get('Success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $mensaje }}
                                </div>
                             @endif
                        </div>

                

					
                <h3>Datos del Jugador</h3>
                    <div class="panel-body">
		                <form >
                        <div class="form-group">
                            <label for="nombre">Nombres</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $jugador->nombre }}" required>
                        </div>
                        

						<div class="form-group">
        		            <label for="apellido_paterno">Apellido Paterno</label>
		                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" value="{{ $jugador->apellido_paterno }}">
                        </div>
                        
                        <div class="form-group">
        		            <label for="apellido_materno">Apellido Materno</label>
		                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" value="{{ $jugador->apellido_materno }}">
                        </div>

                        <div class="form-group">
							<label for="foto">Foto</label>
		                    <input type="file" class="form-control filestyle" id="foto" name="foto" data-buttonName="btn-primary" data-buttonText="Seleccionar" data-size="sm" placeholder="Foto" accept=".jpg, .png, .jpeg" value="{{ $jugador->foto  }}">

						</div>
                        <div class="form-group">
							<label for="nro_camiseta">Numero de Camiseta</label>
		                    <input type="number" class="form-control" id="numero" name="nro_camiseta" placeholder="1-99" value="{{ $jugador-> nro_camiseta }}">

						</div>
                        <div class="form-group">
							<label for="id_categoria"></label>
		                    <input hidden type="number" class="form-control" id="id_categoria" name="id_categoria" placeholder="1" value="{{ $jugador-> id_categoria }}">

						</div>
                        
                      
                        <div class="form-group">
							<label for="habilitado"></label>
		                    <input  hidden type="text" class="form-control" id="habilitado" name="habilitado" placeholder="1" value="{{ $jugador-> habilitado }}">

						</div>
                        <div class="form-group">
							<label for="posicion">Posicion de Juego</label>
                            <select class="form-control" name="posicion">
								<option value="{{ $jugador->posicion  }}"> {{ $jugador->posicion  }}</option>
								<option value="1">Base</option>
                                <option value="2">Alero</option>
                                <option value="3">Pivot</option>
                                <option value="4">Ala-Base</option>
                                <option value="5">Ala-Pivot</option>
                                <option value="6">Base-Pivot</option>
							</select>
					    </div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label for="fecha_nacimiento">Fecha de nacimiento</label>
									<div class='input-group date' id='fecha_nacimiento'>
										<input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha Nacimiento" value="{{ $jugador->fecha_nacimiento  }}">

										<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>
						</div>
                        

                        <div class="form-group">
							<label for="sexo_usuarios">Sexo</label>
							<select class="form-control" name="sexo_usuarios">
								<option value="{{ $jugador->sexo_usuarios  }}">{{ $jugador->sexo_usuarios  }}</option>
								<option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
							</select>
						</div>
   
                        <div class="form-group">
		                    <label for="celular">Celular</label><br>
		                    
                                
                                <input id="celular" type="number" name="celular" value="{{ $jugador->celular  }}"/>
                                
                        </div>
                            

         
                            <div class="form-group">
                                <label for="pais_usuarios">Nacionalidad</label>
                                
                                    <select name="pais_usuarios" class="form-control">
                                        <option value="{{ $jugador->pais_usuarios }}" selected>{{ $jugador->pais_usuarios  }}"</option>
                                        
                                        <option value="AF">Afganist??n</option>
                                        <option value="AL">Albania</option>
                                        <option value="DE">Alemania</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Ant??rtida</option>
                                        <option value="AG">Antigua y Barbuda</option>
                                        <option value="AN">Antillas Holandesas</option>
                                        <option value="SA">Arabia Saud??</option>
                                        <option value="DZ">Argelia</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaiy??n</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrein</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BE">B??lgica</option>
                                        <option value="BZ">Belice</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermudas</option>
                                        <option value="BY">Bielorrusia</option>
                                        <option value="MM">Birmania</option>
                                        <option value="BO" >Bolivia</option>
                                        <option value="BA">Bosnia y Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brasil</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="BT">But??n</option>
                                        <option value="CV">Cabo Verde</option>
                                        <option value="KH">Camboya</option>
                                        <option value="CM">Camer??n</option>
                                        <option value="CA">Canad??</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CY">Chipre</option>
                                        <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comores</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, Rep??blica Democr??tica del</option>
                                        <option value="KR">Corea</option>
                                        <option value="KP">Corea del Norte</option>
                                        <option value="CI">Costa de Marf??l</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croacia (Hrvatska)</option>
                                        <option value="CU">Cuba</option>
                                        <option value="DK">Dinamarca</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egipto</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="AE">Emiratos ??rabes Unidos</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="SI">Eslovenia</option>
                                        <option value="ES" >Espa??a</option>
                                        <option value="US">Estados Unidos</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Etiop??a</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="PH">Filipinas</option>
                                        <option value="FI">Finlandia</option>
                                        <option value="FR">Francia</option>
                                        <option value="GA">Gab??n</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GD">Granada</option>
                                        <option value="GR">Grecia</option>
                                        <option value="GL">Groenlandia</option>
                                        <option value="GP">Guadalupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GY">Guayana</option>
                                        <option value="GF">Guayana Francesa</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GQ">Guinea Ecuatorial</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="HT">Hait??</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HU">Hungr??a</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IQ">Irak</option>
                                        <option value="IR">Ir??n</option>
                                        <option value="IE">Irlanda</option>
                                        <option value="BV">Isla Bouvet</option>
                                        <option value="CX">Isla de Christmas</option>
                                        <option value="IS">Islandia</option>
                                        <option value="KY">Islas Caim??n</option>
                                        <option value="CK">Islas Cook</option>
                                        <option value="CC">Islas de Cocos o Keeling</option>
                                        <option value="FO">Islas Faroe</option>
                                        <option value="HM">Islas Heard y McDonald</option>
                                        <option value="FK">Islas Malvinas</option>
                                        <option value="MP">Islas Marianas del Norte</option>
                                        <option value="MH">Islas Marshall</option>
                                        <option value="UM">Islas menores de Estados Unidos</option>
                                        <option value="PW">Islas Palau</option>
                                        <option value="SB">Islas Salom??n</option>
                                        <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                        <option value="TK">Islas Tokelau</option>
                                        <option value="TC">Islas Turks y Caicos</option>
                                        <option value="VI">Islas V??rgenes (EEUU)</option>
                                        <option value="VG">Islas V??rgenes (Reino Unido)</option>
                                        <option value="WF">Islas Wallis y Futuna</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italia</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Jap??n</option>
                                        <option value="JO">Jordania</option>
                                        <option value="KZ">Kazajist??n</option>
                                        <option value="KE">Kenia</option>
                                        <option value="KG">Kirguizist??n</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="LA">Laos</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LV">Letonia</option>
                                        <option value="LB">L??bano</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libia</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lituania</option>
                                        <option value="LU">Luxemburgo</option>
                                        <option value="MK">Macedonia, Ex-Rep??blica Yugoslava de</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MY">Malasia</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MV">Maldivas</option>
                                        <option value="ML">Mal??</option>
                                        <option value="MT">Malta</option>
                                        <option value="MA">Marruecos</option>
                                        <option value="MQ">Martinica</option>
                                        <option value="MU">Mauricio</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">M??xico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldavia</option>
                                        <option value="MC">M??naco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">N??ger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk</option>
                                        <option value="NO">Noruega</option>
                                        <option value="NC">Nueva Caledonia</option>
                                        <option value="NZ">Nueva Zelanda</option>
                                        <option value="OM">Om??n</option>
                                        <option value="NL">Pa??ses Bajos</option>
                                        <option value="PA">Panam??</option>
                                        <option value="PG">Pap??a Nueva Guinea</option>
                                        <option value="PK">Paquist??n</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Per??</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PF">Polinesia Francesa</option>
                                        <option value="PL">Polonia</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="UK">Reino Unido</option>
                                        <option value="CF">Rep??blica Centroafricana</option>
                                        <option value="CZ">Rep??blica Checa</option>
                                        <option value="ZA">Rep??blica de Sud??frica</option>
                                        <option value="DO">Rep??blica Dominicana</option>
                                        <option value="SK">Rep??blica Eslovaca</option>
                                        <option value="RE">Reuni??n</option>
                                        <option value="RW">Ruanda</option>
                                        <option value="RO">Rumania</option>
                                        <option value="RU">Rusia</option>
                                        <option value="EH">Sahara Occidental</option>
                                        <option value="KN">Saint Kitts y Nevis</option>
                                        <option value="WS">Samoa</option>
                                        <option value="AS">Samoa Americana</option>
                                        <option value="SM">San Marino</option>
                                        <option value="VC">San Vicente y Granadinas</option>
                                        <option value="SH">Santa Helena</option>
                                        <option value="LC">Santa Luc??a</option>
                                        <option value="ST">Santo Tom?? y Pr??ncipe</option>
                                        <option value="SN">Senegal</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leona</option>
                                        <option value="SG">Singapur</option>
                                        <option value="SY">Siria</option>
                                        <option value="SO">Somalia</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="PM">St Pierre y Miquelon</option>
                                        <option value="SZ">Suazilandia</option>
                                        <option value="SD">Sud??n</option>
                                        <option value="SE">Suecia</option>
                                        <option value="CH">Suiza</option>
                                        <option value="SR">Surinam</option>
                                        <option value="TH">Tailandia</option>
                                        <option value="TW">Taiw??n</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TJ">Tayikist??n</option>
                                        <option value="TF">Territorios franceses del Sur</option>
                                        <option value="TP">Timor Oriental</option>
                                        <option value="TG">Togo</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad y Tobago</option>
                                        <option value="TN">T??nez</option>
                                        <option value="TM">Turkmenist??n</option>
                                        <option value="TR">Turqu??a</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UA">Ucrania</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekist??n</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="YE">Yemen</option>
                                        <option value="YU">Yugoslavia</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabue</option>
                                    </select>
                            </div>
                        </div>
                                        
                        <div class="form-group">
                            <label for="id_equipo">equipo</label>
                            <input type="text" class="form-control" id="id_equipo" name="id_equipo" placeholder=" Equipo" value="{{ $jugador->id_equipo  }}">
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
<!-- jQuery -->
<script src="../../admin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../../admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../../admin/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../../admin/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js../ -->
<script src="../../admin/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../../admin/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../../admin/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../../admin/vendors/Flot/jquery.flot.js"></script>
<script src="../../admin/vendors/Flot/jquery.flot.pie.js"></script>
<script src="../../admin/vendors/Flot/jquery.flot.time.js"></script>
<script src="../../admin/vendors/Flot/jquery.flot.stack.js"></script>
<script src="../../admin/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../../admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../../admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../../admin/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../../admin/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../../admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../../admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../../admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../../admin/vendors/moment/min/moment.min.js"></script>
<script src="../../admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../../admin/build/js/custom.min.js"></script>
@endsection