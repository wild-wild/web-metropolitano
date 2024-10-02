<div wire:ignore.self class="modal fade" id="addUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri">
                <h5 class="modal-title">
                    <B> REGISTRAR USUARIOS</B>
                </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="modal-body">
                <form action="#" wire:submit.prevent="store" class="form-horizontal">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Nombres</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="name" type="text"
                                placeholder="Ingrese sus Nombres" onkeyup="this.value=this.value.toUpperCase()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="apellido" type="text"
                                placeholder="Ingrese sus Apellidos" onkeyup="this.value=this.value.toUpperCase()">
                        </div>

                    </div>
                    <div class="form-group">
                        <label f>Correo Electronico</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="email" type="email"
                                placeholder="Ingrese su Correo Electronico"
                                onkeyup="this.value=this.value.toUpperCase()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="password" type="text"
                                placeholder="Ingrese una Contraseña">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Repetir Contraseña</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="password_confirmation" type="text"
                                placeholder="Repita la Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Rol</label>
                        <select wire:model="role" class="form-control text-uppercase">
                            <option value="">Seleccione un Rol</option>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="text-uppercase" value="<?php echo e($rol->id); ?>"><?php echo e($rol->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <div class="d-grid gap-2 col-10 mx-auto bg-success ">
                            <button type="submit" value="enviar" class="btn btn-store">Registrar Usuario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/configuracion/create.blade.php ENDPATH**/ ?>