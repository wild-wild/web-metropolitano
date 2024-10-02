<div wire:ignore.self class="modal fade" id="updateRol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri text-light">
                <h5 class="modal-title">
                    <b>REGISTRAR | Rol</b>
                </h5>
                <button wire:click.prevent="cancel" type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" class="form-horizontal">
                    <div class="form-group">
                        <label for="name"><b>Nombre Del Rol</b></label>
                        <input wire:model="name" type="text"
                            class="form-control  <?php $__errorArgs = ['permisos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        is-invalid
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="name">
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
                        <label><b>Permisos para este Rol</b></label><br>
                        <?php $__currentLoopData = $permisosRol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input wire:model="permisos" class="m-1 align-middle" type="checkbox"
                                value="<?php echo e($row->id); ?>">
                            <label class="text-center m-0"><?php echo e($row->name); ?></label>
                            <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__errorArgs = ['permisos'];
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
                    <div class="modal-footer">
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <button type="submit" class="btn btn-store close-modal">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\plantilla admin LTE\plantilla\resources\views/livewire/role/update.blade.php ENDPATH**/ ?>