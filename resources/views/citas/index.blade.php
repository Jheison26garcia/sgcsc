<!doctype html>
 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de citas</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de citas</h1>
      <a href="{{route('citas.create')}}" class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Paciente</th>
                    <th scope="col">Profesional de la Salud</th>
                    <th scope="col">Fecha cita</th>
                    <th scope="col">Hora Cita</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Notas consulta</th>
                    <th scope="col">Actions</th> 
                </tr>
            </thead>
            <tbody>
             @foreach ($citas as $cita)
                <tr>
                    <th scope="row">{{ $cita->id }}</th>
                    <td>{{ $cita->nombre_paciente }}</td>
                    <td>{{ $cita->nombre_profesional }}</td>
                    <td>{{ $cita->fecha_cita }}</td> 
                    <td>{{ $cita->hora }}</td>
                    <td>{{ $cita->motivo }}</td>
                    <td>{{ $cita->notas }}</td> 
                    <td> 
                    <a href="{{route('citas.edit', ['cita'=> $cita->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('citas.destroy' , ['cita' => $cita->id])}}"
                    method="POST" style="display: inline-block">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    

    
   </body>

  
</html> 