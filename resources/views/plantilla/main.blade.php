<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" integrity="sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/baner.css">

    
	  
    @yield('hojasEstilo')
    <title>@yield('titulo')</title>
</head>
<body>
               
<header>
            


            <div class="carousel" id="padre">
                 <div class="carousel-inner" >
                        <div  class="item" id="uno" style="background-image: url('/assets/img/bg_head1.jpg')">
                            <ul class="menu cf ">
                                <li><a href="/" >Inicio</a></li>
                                
                                <li>
                                    <a href="#">Registros</a>
                                        <ul class="submenu ">
                                            <li><a href="/jugadoreslista">Jugadores</a></li>
                                            <li><a href="/equipos">Equipos</a></li>
                                            <li><a href="/torneos">Torneos</a></li>
                                        </ul>
                                </li>
                                <li><a href="/preregistro">Preregistro</a></li>
                                <li><a href="/documentacion">Documentacion</a></li>
                                <li><a href="/contactos">Contactos</a></li>

                                <li><a href="{{route('admin.convocatoria.index')}}">Convocatoria</a>
                                    <ul class="submenu ">
                                        <li><a href="{{route('admin.convocatoria.create')}}">Crear Convocatoria</a></li>
                                        <li><a href="{{route('admin.convocatoria.index')}}">Ver Convocatoria</a></li>

                                        
                                    </ul>
                                
                                </li>
                                
                                <li><a href="/administrador">Ingresar</a></li>
                            </ul>
                        </div>
                 </div>
            </div>

   
         
	</header>
   
   
       




    <div class="container-fluid">
    	@yield('contenido')
		</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
@yield('script')
</html>