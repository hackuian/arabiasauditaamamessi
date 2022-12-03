
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" integrity="sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/baner.css">

    <title>Document</title>
</head>
<body>
    <H3>BIENVENIDO</H3>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Subir Convocatoria</h1>
            <div class="card-body">
                <form action="{{route('admin.convocatoria.store')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
    
                        <input type="file" name="file" id='' accept="image/*">
                        @error('file')
                         <small class="text-danger">
                            {{$menssage}}

                         </small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">subir imagen</button>
                  </form>
            </div>
            
        </div>
    </div>

</div>

</body>
</html>


