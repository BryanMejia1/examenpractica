<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Contacto</title>
</head>
<body>
    <form action="<?php echo e(route('contacto.guardar')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <h1>Agregar Contacto</h1>
    <div class="form-control">
        <label for="codigoentrada" class="form-label">Codigo de entrada</label>
        <input type="text" class="form-control" name="codigoentrada" id="codigoentrada">
    </div>
    <div class="form-control">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
    <div class="form-control">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido">
    </div>
    <div class="form-control">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="Telefono">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="<?php echo e(route('contacto.ver')); ?>" class="btn btn-info">Regresar</a>
    </form>
</body>
</html><?php /**PATH C:\wamp64\www\examen\resources\views/agregarcontacto.blade.php ENDPATH**/ ?>