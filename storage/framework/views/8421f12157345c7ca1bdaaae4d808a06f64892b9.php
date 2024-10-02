<?php $__env->startSection('title', 'home'); ?>

<?php $__env->startSection('contenidoBody'); ?>
     <div class="container">
        <header class="superior d-flex justify-content-between">
            <div class="logo">
                <img class="img_home" src= "<?php echo e(asset('img/imagenes/francisco.png')); ?>" alt="Unidad Educativa lider en formacion" style="color: azure;">
            </div>
            <nav class="menu">
                <ul class="opciones">
                  <li><a href="">Inicio</a></li>
                  <li><a href="">Nosotros</a></li>
                  <li><a href="">Servicios</a></li>
                  <li><a href="">Noticias</a></li>
                  <li><a href="">Contacto</a></li>
                </ul>
            </nav>
            <div class="mt-4 p-1" style="margin: 0 0 0 50px">
                        <a  href="<?php echo e(route('login')); ?>"
                      class="btn bg-success mx-5 p-3">Iniciar</a>

            </div>

        </header>
   
  
     </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chuturubi\Documents\REPOSITORIO\laravel\resources\views/home.blade.php ENDPATH**/ ?>