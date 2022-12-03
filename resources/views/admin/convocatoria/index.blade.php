@extends('plantilla.main')

@section ('contenido')

 



<br>  
<br>  
<br>  

  <div class="container-fluid bg-light text-color p-3"> 
    <center> <p class="small"> Todos los Derechos reservados Maxibasquet :: Bolivia 2022 </p> </center>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<div class="container">
    <div class="row">
       @foreach ($files as $file)
       <div class="col">
        <img src="{{asset($file->url)}}" alt="">
        <div class="card-footer">
            <a href="" class="btn btn-primary">edit</a>
        </div>
       </div>
           
       @endforeach
        </div>
    </div>
</div>







@endsection
