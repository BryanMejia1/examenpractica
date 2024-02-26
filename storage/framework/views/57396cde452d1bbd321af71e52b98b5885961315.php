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
            <?php $__currentLoopData = $directorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($directorio->codigoEntrada); ?></td>
                    <td><?php echo e($directorio->nombre); ?></td>
                    <td><?php echo e($directorio->apellido); ?></td>
                    <td><?php echo e($directorio->correo); ?></td>
                    <td><?php echo e($directorio->telefono); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
    <div class="text-right">
        <a href="<?php echo e(route('directorio.principal')); ?>" class="btn btn-secondary">Cancelar</a>
        <a href="<?php echo e(route('directorio.eliminado')); ?>" class="btn btn-danger">Confirmar</a>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\examen\resources\views/eliminar.blade.php ENDPATH**/ ?>