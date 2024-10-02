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
        <section class="slider">
           `{an--  <img src="<?php echo e(asset('img/imagenes/colegio.jpeg')); ?>" class="colegio img_home">
            <img src="<?php echo e(asset('img/imagenes/frontis.jpg')); ?>" id="frontis img_home">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>--}
                <div class="carousel-inner">
                    <div class="carousel-item active text-center ">
                        <img src="<?php echo e(asset('img/imagenes/colegio.jpeg')); ?>"
                            class="img_ruleta justify-content-center align-content-center" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item text-center ">
                        <img src="<?php echo e(asset('img/imagenes/frontis.jpg')); ?>"
                            class="img_ruleta justify-content-center align-content-center" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item text-center ">
                        <img src="<?php echo e(asset('img/imagenes/colegio.jpeg')); ?>"
                            class="img_ruleta justify-content-center align-content-center" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </section>
        <section class="cuerpo">
            <h1 class="titulo">
                Bienvenidos a la Unidad Educativa "San Francisco Sur Secundaria" lider en formacion.
            </h1>
            <article class="caja">
                <div class="subtitulo"><img src="<?php echo e(asset('img/imagenes/clases.jpg')); ?>" alt="" class="sujeto img_home">
                    <h3 class="servicios">
                        MISIÓN INSTITUCIONAL
                    </h3>
                    </div>
                    <div class="contenido"><p>Desarrollamos la formación de lideres, aplicando estrategías
                        innovadoras tecnológicas y pedagógicas acorde al modelo educativo en base a valores sociocomunicatorias.
                    </p></div>
                    <center><input type="submit" class="boton" value="ACCEDER"></center>
            </article>
            <article class="caja">
                <div class="subtitulo"><img src="<?php echo e(asset('img/imagenes/formacion.jpg')); ?>" alt="" class="sujeto img_home">
                <h3 class="servicios">
                    VISIÓN INSTITUCIONAL
                </h3>
                </div>
            <div class="contenido"><P>La unidad educativa "San Francisco Sur" turno mañana será reconocido como un centro de formación
                                      de jóvenes lideres con trascendencias en la comunidad.
            </P></div>
            <center><input type="submit" class="boton" value="ACCEDER"></center>
            </article>
            <article class="caja">
                <div class="subtitulo"> <img src="<?php echo e(asset('img/imagenes/licencias.jpg')); ?>" alt="" class="sujeto img_home">
                    <h3 class="servicios">
                        SERVICIOS DE LICENCIAS
                    </h3>
                    </div>
                    <div class="contenido">
                        <p>La licencia educativa es presencial solicitada por los padres de familia y tutores,
                            también lo pueden realizar los estudiantes en el proceso educativo y la administración
                            lo respalda.
                        </p>

                    </div>
                    <center><input type="submit" class="boton" value="ACCEDER"></center>

            </article>
        </section>
        <footer class="pie">
            <div class="izquierda">
                <center><img class="img_home" src="imagenes/excelencia.png" alt="" width="70px" height="65px">
                    <p class="abajo">la unidad educativa brinda servicios de educación a todos los jóvenes
                        que pertencen a la red 59 del ditrito plan 3000.
                    </p>
                </center>
            </div>

            <div class="derecha">
                <p class="siguenos">Siguenos por:</p>
               <center>
                <img src="imagenes/wimagen.png" alt="" class="redes img_home">
                <img src="imagenes/fimagen.png" alt="" class="redes img_home">
                <img src="imagenes/Insgen.png" alt="" class="redes img_home">
                <img src="imagenes/twitter.png" alt="" class="redes img_home">
            </center>
            </div>
        </footer>
     </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chuturubi\Documents\REPOSITORIO\web-laravel-metropolitano\resources\views/home.blade.php ENDPATH**/ ?>