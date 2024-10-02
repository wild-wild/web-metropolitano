<div wire:ignore.self class="modal fade" id="createCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-c-pri">
                <h5 class="modal-title">
                    <b>REGISTRAR CURSO</b>
                </h5>
                <button wire:click="resetInput()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" class="form-horizontal" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nombreCurso" class="form-label">Nombre del Curso</label>
                        <input name="nombre" wire:model="nombreCurso" type="text" class="form-control" id="nombreCurso" placeholder="Nombre del Curso" required>
                        <?php $__errorArgs = ['nombreCurso'];
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
                        <label for="paraleloCurso" class="form-label">Paralelo del Curso</label>
                        <input name="paralelo" wire:model="paraleloCurso" type="text" class="form-control" id="paraleloCurso" placeholder="Paralelo del Curso" required>
                        <?php $__errorArgs = ['paraleloCurso'];
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
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\plantilla admin LTE\plantilla\resources\views/livewire/curso/create.blade.php ENDPATH**/ ?>