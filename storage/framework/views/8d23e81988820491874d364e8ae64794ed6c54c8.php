<div style="z-index:9999" wire:ignore.self class="modal fade" id="modalMateria" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black"  id="exampleModalLabel">Seleccione Materias</h5>
                <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <?php echo csrf_field(); ?>
            <div class="modal-body text-black">
                <?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                        <input wire:model="materiasSeleccionadas.<?php echo e($row['id']); ?>" type="checkbox" class="form-check-input"
                            value="<?php echo e($row['materia']); ?>" id="<?php echo e($row['id']); ?>">
                        <label class="form-check-label" for="<?php echo e($row['id']); ?>" style="cursor: pointer">
                            <?php echo e($row['materia']); ?>

                        </label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__errorArgs = ['materiasSeleccionadas'];
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
            <div class="modal-footer">
                <a wire:click="seleccionarMaterias2" type="submit" class="btn btn-secondary" >
                    Seleccionar Materias
                </a>
            </div>
        </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/modalMateria.blade.php ENDPATH**/ ?>