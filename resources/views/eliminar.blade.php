<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
</head>
<body>
    <h1>Eliminacion de registros</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($directorios as $directorio)
                <tr>
                    <td>{{$directorio->codigoEntrada}}</td>
                    <td>{{$directorio->nombre}}</td>
                    <td>{{$directorio->apellido}}</td>
                    <td>{{$directorio->correo}}</td>
                    <td>{{$directorio->telefono}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="text-right">
        <a href="{{route('directorio.principal')}}" class="btn btn-secondary">Cancelar</a>
        <a href="{{route('directorio.eliminado')}}" class="btn btn-danger">Confirmar</a>
    </div>
</body>
</html>