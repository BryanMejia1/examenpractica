<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directorio</title>
</head>
<body>
    <h1>Página principal del Directorio</h1>
    <h1>Directorio Telefóico</h1>

    <a href="{{route('directorio.crear')}}" class="btn btn-primary">Agregar nuevo</a>
    <a href="{{route('directorio.buscar')}}" class="btn btn-success">Buscar</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Ver contactos</th>
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
                    <a href="{{route('contacto.ver', $contacto->id, $contacto->nombre, $contacto->apellido)}}" class="btn btn-info">Ver</a>
                </td>
                <td>
                    <a href="{{route('contacto.eliminar')}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>