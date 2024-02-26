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
        <input type="text" class="form-control" name="codigo" id="codigo" value='<?php echo e($contac->id); ?>' readonly>
    </div>
    <div class="form-group">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value='<?php echo e($contac->nombre); ?>' readonly>
    </div>
    <div class="form-group">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo e($contac->apellido); ?>" readonly>
    </div>
    <br>
    <a href="<?php echo e(route('contacto.agregarcontacto')); ?>" class="btn btn-primary">Agregar nuevo contacto</a>
    <a href="<?php echo e(route('directorio.principal')); ?>" class="btn btn-info">Regresar</a>

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
        <?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($contacto->id); ?></td>
                <td><?php echo e($contacto->nombre); ?></td>
                <td><?php echo e($contacto->apellido); ?></td>
                <td><?php echo e($contacto->telefono); ?></td>
                <td>
                    <a href="<?php echo e(route('contacto.eliminarcontacto', $contacto->id)); ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\wamp64\www\examen\resources\views/vercontactos.blade.php ENDPATH**/ ?>