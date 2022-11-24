@extends('admin.plantillaadmin.mainadmin')
@section('hojasEstilo')
@endsection
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
@section('contenido')

        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre del Stadio</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Ubicaión</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ubicación">
            </div>
            <br>
            <br>
            <div>
                <label class="form-label" for="customFile">Subir imagen del Stadio</label>
                <input type="file" class="form-control" id="customFile" />
            </div>  
            <br>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form> 
    
@endsection
@section('script')
@endsection