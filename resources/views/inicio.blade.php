@extends('plantilla.main')

@section ('contenido')

 
<div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="assets/img/imagen5.png" class="card-img-top" alt="partido1">
            <center>
            <div class="card-body" style="background-color: whitesmoke; border-style: wh;">
              <h5 class="card-title">Primer partido de la jornada</h5>
              <p class="card-text">Se enfrentaran a las 16:00</p>
            </div>
            </center>
               
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body" style="background-color: whitesmoke; border-style: wh;">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Noticia 2</p>
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body" style="background-color: whitesmoke; border-style: wh;">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"> Noticia 4</p>
            </div>
           
          </div>
        </div>
      </div>

      <br>  
      <br>  
      <br>  
      
        <center>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button" style="background-color:#0066ff"  href="https://www.facebook.com/ligamaxibasquetsantacruz/" >Convocatoria</button>
          </div>
        </center>

       <br>  
       <br>  
      

    <center>
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#0066ff; border-color: #0066ff;">
          Equipos del Torneo
        </a>
      
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Argentina</a></li>
          <li><a class="dropdown-item" href="#">Colombia</a></li>
          <li><a class="dropdown-item" href="#">Bolivia</a></li>
        </ul>
      </div>
    </center>

    <br>  



    <br/>

  <div class="text-bg-primary p-3"></div>



  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true"  >
      <div class="carousel-indicators" >
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/imagen1.jpg" class="d-block w-100" alt="imagen1" width="100px" height="720px">
        </div>
        <div class="carousel-item">
          <img src="assets/img/imagen2.jpg" class="d-block w-100" alt="imagen2" width="100px" height="720px">
        </div>
        <div class="carousel-item">
          <img src="assets/img/imagen4.jpg" class="d-block w-100" alt="imagen3" width="100px" height="720px">
        </div> 
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>


  
  <div class="text-bg-primary p-3"></div>


  <center>
 
  </center>


  <br>  
  <br>  
  <br>  




<center>
      <section class="Description">
    
          <h2 class="title">Liga Maxibasquet</h2>
          <p>
          La mejor liga del mundo
          </p>

      </section>
</center>


<br>  
<br>  
<br>  

  <div class="container-fluid bg-light text-color p-3"> 
    <center> <p class="small"> Todos los Derechos reservados Maxibasquet :: Bolivia 2022 </p> </center>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>










@endsection
