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

    <a href="<?php echo e(route('directorio.crear')); ?>" class="btn btn-primary">Agregar nuevo</a>
    <a href="<?php echo e(route('directorio.buscar')); ?>" class="btn btn-success">Buscar</a>
    
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
        <?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($contacto->id); ?></td>
                <td><?php echo e($contacto->nombre); ?></td>
                <td><?php echo e($contacto->apellido); ?></td>
                <td><?php echo e($contacto->telefono); ?></td>
                <td>
                    <a href="<?php echo e(route('contacto.ver', $contacto->id, $contacto->nombre, $contacto->apellido)); ?>" class="btn btn-info">Ver</a>
                </td>
                <td>
                    <a href="<?php echo e(route('contacto.eliminar')); ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\wamp64\www\examen\resources\views/directorio.blade.php ENDPATH**/ ?>