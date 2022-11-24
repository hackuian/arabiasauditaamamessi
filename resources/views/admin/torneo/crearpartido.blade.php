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

    <h1>Crear Partido</h1>

    <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Equipo 1</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Equipo 2   </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <br>


    </form> 

    <h3>Elige un horario</h3>

    <br>
    <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
        18:00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        19:00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        20:00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        21:00
        </label>
    </div>
    <br>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <br>
    <br>

@endsection

