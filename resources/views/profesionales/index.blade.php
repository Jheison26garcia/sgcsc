<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de profesionales</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de profesionales</h1>
      <a href="{{route('profesionales.create')}} " class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Horarios</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th> 
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($profesionales as $profesional)
                <tr>
                    <th scope="row">{{ $profesional->id }}</th>
                    <td>{{ $profesional->nombre }}</td>
                    <td>{{ $profesional->apellido }}</td>
                    <td>{{ $profesional->especialidad }}</td>
                    <td>{{ $profesional->horarios }}</td> 
                    <td>{{ $profesional->telefono }}</td>
                    <td>{{ $profesional->email }}</td>
                    <td>
                    <a href="{{route('profesionales.edit', ['profesional'=> $profesional->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('profesionales.destroy' , ['profesional' => $profesional->id])}}"
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