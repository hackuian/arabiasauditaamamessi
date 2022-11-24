@extends('plantilla.main')

@section('hojasEstilo')
	<link rel="stylesheet" href="plugins/bootstrap-datetimepicker-4.17.47/css/bootstrap-datetimepicker.min.css">
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   
    <link rel="stylesheet" href="./public/assets/css/fixture.css">

@endsection


@section ('contenido')
<br>
<center>
<h1>Tabla de Posiciones</h1>
</center>
<br>

<table class="table table-dark table-hover">

  <thead>
    <tr>
      <th scope="col">Posición</th>
      <th scope="col">Escudo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Puntos</th>
      <th scope="col">G</th>
      <th scope="col">P</th>
      <th scope="col">Pct.</th>
      <th scope="col">PDL </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <img src= "/assets/img/lakers.png" width="60" height="40" alt="escudo"></td>
      <td>Lakers</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td> <img src= "/assets/img/Cavaliers.png" width="60" height="40" alt="escudo"></td>
      <td>Cavaliers</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td> <img src= "/assets/img/Chicago.png" width="60" height="40" alt="escudo"></td>
      <td>Chicago Bulls</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td> <img src= "/assets/img/Golden.png" width="60" height="40" alt="escudo"></td>
      <td>Golden States</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td> <img src= "/assets/img/nicks.png" width="60" height="40" alt="escudo"></td>
      <td>Nicks</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
    </tr>
  </tbody>
</table>
<br>
<br>



@endsection
