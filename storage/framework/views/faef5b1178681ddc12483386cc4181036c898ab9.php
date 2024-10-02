<div wire:ignore.self id="seleccionarPadre" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">BUSCAR</h1>
                <button wire:click.prevent="cancelSeleccionar()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="AgregarRegistroBuscado" class="form-horizontal" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="padre_id" class="form-label">Buscar el Padre /Tutor</label>
                        <div class="input-group">
                            <input list="padres" wire:change='buscarRegistroPadre' wire:model="buscarPadre" type="text" class="form-control" id="padre_id"
                                placeholder="Buscar al Padre/Madre/Tutor por numero de C.I." aria-describedby="basic-addon1">
                                <datalist id="padres">
                                    <?php $__currentLoopData = $padres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-uppercase" value="<?php echo e($row->ciPadre); ?>">
                                        <?php echo e($row->ciPadre); ?> | <?php echo e($row->name); ?> <?php echo e($row->apellido); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </datalist>
                        </div>
                        <?php $__errorArgs = ['padre_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

            </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 col-10 mx-auto">
                    <button type="submit" class="btn bg-success">ACEPTAR</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/estudiante/seleccionarPadre.blade.php ENDPATH**/ ?>