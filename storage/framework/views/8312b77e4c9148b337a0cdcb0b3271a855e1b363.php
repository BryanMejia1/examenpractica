<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar Entrada</title>
</head>
<body>
    <h1>Buscar Entrada</h1>
    <form action='<?php echo e(route('directorio.busqueda')); ?>'>
        <div class="form-group">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" id="correo">
        </div>

        <button type="submit" class="btn btn-success">Buscar</button>
        <a href="<?php echo e(route('directorio.principal')); ?>" class="btn btn-info">Regresar</a>
    </form>
</body>
</html><?php /**PATH C:\wamp64\www\examen\resources\views/buscar.blade.php ENDPATH**/ ?>