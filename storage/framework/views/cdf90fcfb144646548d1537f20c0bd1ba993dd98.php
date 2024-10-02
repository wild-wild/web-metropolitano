<div wire:ignore.self class="modal fade" id="createPadre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri">
                <h5 class="modal-title">
                    <B> REGISTRAR PADRE/MADRE</B>
                </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <form action="#" wire:submit.prevent="store" class="form-horizontal">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>C.I.</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="ciPadre" type="text"
                                placeholder="Ingrese sus Nombres" >
                            <?php $__errorArgs = ['ciPadre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger m-0"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nombres</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="name" type="text"
                                placeholder="Ingrese sus Nombres" >
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger m-0"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="apellido" type="text"
                                placeholder="Ingrese sus Apellidos" >

                            <?php $__errorArgs = ['apellido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger m-0"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label>Correo Electronico</label>
                        <div class="input-group mb-3">
                            <input wire:model="email" type="email" class="form-control"
                                placeholder="Correo Electronico" aria-label="Recipient's username"
                                aria-describedby="button-addon2" >
                            <a wire:click.prevent="generarCorreo" class="btn btn-outline-secondary bg-success"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Generar Correo Electronico"
                                type="button" id="button-addon2"><i class="fa-solid fa-arrows-rotate"></i></a>
                        </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger m-0"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Telefono (Numero Celular)</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="telefono" type="number"
                                placeholder="Ingrese su numero Celular" >
                            <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger m-0"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="password" type="text"
                                placeholder="Ingrese una Contraseña">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger m-0"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Repetir Contraseña</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="password_confirmation" type="text"
                                placeholder="Repita la Contraseña">
                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger m-0"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 col-10 mx-auto bg-success ">
                    <button type="submit" class="btn btn-store">Registrar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/padre/create.blade.php ENDPATH**/ ?>