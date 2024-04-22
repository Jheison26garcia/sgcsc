<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Añadir cita</title>
</head>

<body>
    <div class="container">
        <h1>Añadir cita</h1>
        <form method="POST" action="{{route('citas.store')}}">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                <div id="idHelp" class="form-text">cita Id</div>
            </div> 
            <div class="mb-3">
                <label for="obra">profesional:</label>
                <select class="form-select" name="profesional" id="profesional" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($profesionales as $profesional)
                    <option value="{{$profesional->id}}">{{$profesional->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="obra">paciente:</label>
                <select class="form-select" name="paciente" id="paciente" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($pacientes as $paciente)
                    <option value="{{$paciente->id}}">{{$paciente->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha de cita</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Hora:</label>
                <input type="text" required class="form-control" id="hora" aria-describedby="nameHelp" name="hora" placeholder="hora paciente.">
            </div> 
            <div class="mb-3">
                <label for="name" class="form-label">Motivos:</label>
                <input type="text" required class="form-control" id="motivo" aria-describedby="nameHelp" name="motivo" placeholder="motivo paciente.">
            </div> 
            <div class="mb-3">
                <label for="name" class="form-label">Notas:</label>
                <input type="text" required class="form-control" id="notas" aria-describedby="nameHelp" name="notas" placeholder="notas paciente.">
            </div>  
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('citas.index')}}" class="btn btn-warning">Cancel</a>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>