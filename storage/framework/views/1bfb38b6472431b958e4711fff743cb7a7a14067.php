<!doctype html>
<html lang="es">
<?php echo $__env->make('base.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="bg_home">
    <?php echo $__env->yieldContent('contenidoBody'); ?>
    <?php echo $__env->make('base.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/layouts/home.blade.php ENDPATH**/ ?>