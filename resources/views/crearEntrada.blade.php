<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Nueva Entrada Directorio</title>
</head>
<body>
    <h1>Crear Nueva Entrada Directorio</h1>
<form action='{{route('directorio.guardar')}}' method="POST">
    @csrf
    <div class="form-group">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="text" class="form-control" name="codigo" id="codigo">
    </div>

    <div class="form-group">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
    </div>

    <div class="form-group">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido">
    </div>

    <div class="form-group">
        <label for="correo" class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo" id="correo">
    </div>

    <div class="form-group">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    
    <a href="{{route('directorio.principal')}}" class="btn btn-info">Regresar</a>
</form>
</body>
</html>