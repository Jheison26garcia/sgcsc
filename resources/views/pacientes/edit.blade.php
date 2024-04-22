<!doctype html>
<html lang="en">
  <head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit paciente</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit paciente</h1>
        <form method="POST" action="{{route('pacientes.update' , ['paciente' => $paciente->id])}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="code" disabled="disabled" value="{{$paciente->id}}">
                <div id="idHelp" class="form-text">paciente Id</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" required class="form-control" id="nombre" aria-describedby="nameHelp" name="nombre" placeholder="Nombre paciente." value="{{$paciente->nombre}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Apellido:</label>
                <input type="text" required class="form-control" id="apellido" aria-describedby="nameHelp" name="apellido" placeholder="apellido paciente." value="{{$paciente->apellido}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Fecha Nacimiento:</label>
                <input type="date" required class="form-control" id="fecha" aria-describedby="nameHelp" name="fecha"   value="{{$paciente->fecha_nacimiento}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Direccion:</label>
                <input type="text" required class="form-control" id="direccion" aria-describedby="nameHelp" name="direccion"  value="{{$paciente->direccion}}">
            </div> 
            <div class="mb-3">
                <label for="name" class="form-label">Email:</label>
                <input type="text" required class="form-control" id="email" aria-describedby="nameHelp" name="email"  value="{{$paciente->email}}">
            </div> 
            <div class="mb-3">
                <label for="name" class="form-label">Telefono:</label>
                <input type="text" required class="form-control" id="telefono" aria-describedby="nameHelp" name="telefono"  value="{{$paciente->telefono}}">
            </div> 
            <div class="mb-3">
                <label for="name" class="form-label">Historia Medico:</label>
                <input type="text" required class="form-control" id="historial" aria-describedby="nameHelp" name="historial"  value="{{$paciente->historial}}">
            </div> 
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('pacientes.index')}}" class="btn btn-warning">Cancel</a>
            </div>
            
        </form>
    </div>  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

   
  </body>
</html>