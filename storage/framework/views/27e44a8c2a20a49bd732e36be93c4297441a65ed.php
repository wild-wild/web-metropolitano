<div wire:ignore.self class="modal fade" id="updatePadre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri">
                <h5 class="modal-title">
                    <B> aACTUALIZAR PADRE/MADRE</B>
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
                <form action="#" wire:submit.prevent="update" class="form-horizontal">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>C.I.</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="ciPadre" type="text"
                                placeholder="Ingrese sus Nombres" onkeyup="this.value=this.value.toUpperCase()">
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
                                placeholder="Ingrese sus Nombres" onkeyup="this.value=this.value.toUpperCase()">
                        </div>
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
                    <div class="form-group">
                        <label>Apellidos</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="apellido" type="text"
                                placeholder="Ingrese sus Apellidos" onkeyup="this.value=this.value.toUpperCase()">
                        </div>
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
                    <div class="form-group">
                        <label f>Correo Electronico</label>
                        <div class="inner-addon left-addon form-group">
                            <input class="form-control" wire:model="email" type="email"
                                placeholder="Ingrese su Correo Electronico"
                                onkeyup="this.value=this.value.toUpperCase()">
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
                                placeholder="Ingrese su numero Celular" onkeyup="this.value=this.value.toUpperCase()">
                        </div>
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
            <div class="modal-footer">
                <div class="d-grid gap-2 col-10 mx-auto bg-success ">
                    <button type="submit" value="enviar" class="btn btn-store">Actualizar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/padre/update.blade.php ENDPATH**/ ?>