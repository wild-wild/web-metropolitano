<div wire:ignore.self class="modal fade" id="editUsuario"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <b>ACTUALIZAR USUARIO</b>
                </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="#" wire:submit.prevent="update" method="POST" class="form-horizontal">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label >Nombre</label>
                            <input wire:model.lazy="name" type="text" class="form-control text-uppercase" required onkeyup = "this.value=this.value.toUpperCase()">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label >Apellido</label>
                            <input wire:model.lazy="apellido" type="text" class="form-control text-uppercase" id="nivel" required onkeyup = "this.value=this.value.toUpperCase()">
                            <?php $__errorArgs = ['apellido'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label >Correo Electronico</label>
                            <input wire:model.lazy="email" type="email" class="form-control" id="sigla" required onkeyup = "this.value=this.value.toUpperCase()">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label>Rol</label>
                            <select wire:model='role' class="form-control text-uppercase">
                                <option value="">Seleccione un Rol</option>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-uppercase" value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" value="enviar" class="btn btn-secondary close-modal">Actualizar</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\plantilla admin LTE\plantilla\resources\views/livewire/configuracion/update.blade.php ENDPATH**/ ?>