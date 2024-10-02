<!doctype html>
<html lang="es">

<?php echo $__env->make('base.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    
    <?php if(Auth::user()->hasAnyRole(['administrador', 'secretaria'])): ?>
    <?php $__env->startSection('content_top_nav_right'); ?>
        <?php echo $__env->make('layouts.notificacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php endif; ?>

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldContent('contenidoBody'); ?>
    <?php $__env->stopSection(); ?>

    
    <?php $__env->startSection('css'); ?>
        <?php echo $__env->make('base.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
        <!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />


    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
        <script type="text/javascript" src="<?php echo e(asset('js/alerta.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/modal.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/funciones.js')); ?>"></script>

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <?php echo $__env->make('base.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    <?php $__env->stopSection(); ?>


</body>

</html>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\plantilla admin LTE\plantilla\resources\views/layouts/contenido.blade.php ENDPATH**/ ?>