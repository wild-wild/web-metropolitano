<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('img/icon.png')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

    
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
    <!--Bootstrap CSS-->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/diseño.css')); ?>">
    <!-- iconos fontaweasome -->
    <link href="<?php echo e(asset('iconos/fontawesome-free-6.1.1-web/css/all.css')); ?>" rel="stylesheet">
    <!--titulo-->
    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<?php /**PATH C:\Users\chuturubi\Documents\REPOSITORIO\web-laravel-metropolitano\resources\views/base/head.blade.php ENDPATH**/ ?>