<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Contacto</title>
</head>
<body>
    <h1>Lista de contactos</h1>
    <div class="form-group">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="text" class="form-control" name="codigo" id="codigo" value='{{$contac->id}}' readonly>
    </div>
    <div class="form-group">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value='{{$contac->nombre}}' readonly>
    </div>
    <div class="form-group">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" value="{{$contac->apellido}}" readonly>
    </div>
    <br>
    <a href="{{route('contacto.agregarcontacto')}}" class="btn btn-primary">Agregar nuevo contacto</a>
    <a href="{{route('directorio.principal')}}" class="btn btn-info">Regresar</a>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        @foreach ($contactos as $contacto)
            <tr>
                <td>{{$contacto->id}}</td>
                <td>{{$contacto->nombre}}</td>
                <td>{{$contacto->apellido}}</td>
                <td>{{$contacto->telefono}}</td>
                <td>
                    <a href="{{route('contacto.eliminarcontacto', $contacto->id)}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>