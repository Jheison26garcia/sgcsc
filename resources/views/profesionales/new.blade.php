<!doctype html>
<html lang="en">
  <head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Añadir profesional</title>
  </head>
  <body>
    <div class="container">
        <h1>Añadir profesional</h1>
        <form method="POST" action="{{route('profesionales.store')}}">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                <div id="idHelp" class="form-text">profesional Id</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" required class="form-control" id="nombre" aria-describedby="nameHelp" name="nombre" placeholder="Nombre profesional.">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Apellido:</label>
                <input type="text" required class="form-control" id="apellido" aria-describedby="nameHelp" name="apellido" placeholder="Apellido profesional.">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Especialidad:</label>
                <input type="text" required class="form-control" id="especialidad" aria-describedby="nameHelp" name="especialidad" placeholder="Especialidad profesional.">
            </div> 
            <div class="mb-3">
                <label for="name" class="form-label">Horarios:</label>
                <input type="text" required class="form-control" id="horario" aria-describedby="nameHelp" name="horario" placeholder="Horarios profesional.">
            </div> 
            
            <div class="mb-3">
                <label for="name" class="form-label">Telefono:</label>
                <input type="text" required class="form-control" id="telefono" aria-describedby="nameHelp" name="telefono" placeholder="Telefono profesional.">
            </div> 
            
            <div class="mb-3">
                <label for="name" class="form-label">Email:</label>
                <input type="text" required class="form-control" id="email" aria-describedby="nameHelp" name="email" placeholder="Email profesional.">
            </div> 
             
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('profesionales.index')}}" class="btn btn-warning">Cancel</a>
            </div>
            
        </form>
    </div>  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

   
  </body>
</html>