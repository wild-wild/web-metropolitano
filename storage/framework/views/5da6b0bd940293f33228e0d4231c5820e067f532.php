<div wire:ignore.self class="modal fade" id="createMateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri">
                <h5 class="modal-title">
                    <b>REGISTRAR MATERIA</b>
                </h5>
                <button wire:click="resetInput()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" class="form-horizontal" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Sigla</label>
                        <input name="nombre" wire:model="codigo" type="text" class="form-control" id="codigo" placeholder="Nombre del Curso" required>
                        <?php $__errorArgs = ['codigo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label for="nombreMateria" class="form-label">Nombre de la Materia</label>
                        <input name="paralelo" wire:model="nombreMateria" type="text" class="form-control" id="nombreMateria" placeholder="Nombre de la Materia" required>
                        <?php $__errorArgs = ['nombreMateria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 col-10 mx-auto">
                    <button type="submit" class="btn bg-success">REGISTRAR</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/materia/create.blade.php ENDPATH**/ ?>