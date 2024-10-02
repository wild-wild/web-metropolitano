
<?php $__env->startSection('title', 'Ingreso'); ?>
<?php $__env->startSection('contenidoBody'); ?>
    <div class="d-flex justify-content-center align-items-center">
        <div class="card m-5 p-3 d-flex justify-content-center align-items-center fondo_Login">
            <img class="mb-2 p-2" src="<?php echo e(asset('img/logo.png')); ?>" alt="" width="200" height="200">
            <form method="POST" action="<?php echo e(route('login')); ?>" class="needs-validation submit-prevent-form"
                style="width: 18rem;">
                <?php echo csrf_field(); ?>
                <div class="form-floating p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Por favor Introduzca un Correo Electronico Valido">
                    <input name="email" value="<?php echo e(old('email')); ?>" type="email"
                        class="form-control bg-c-bla <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
                        placeholder="Correo Electronico" autofocus>
                    <label style="color:black" for="floatingInput"><?php echo e(__('Correo Electronico')); ?></label>
                </div>

                <div class="form-floating p-2">
                    <input name="password" type="password"
                        class="form-control bg-c-bla <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                        placeholder="contraseña">
                    <label style="color:black"><?php echo e(__('Contraseña')); ?></label>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-lg bg-success text-light submit-prevent-button m-2">
                        INGRESAR
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/auth/login.blade.php ENDPATH**/ ?>