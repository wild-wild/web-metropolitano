<?php echo $__env->make('livewire.estudiante.seleccionarPadre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div wire:ignore.self id="createEstudiante" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">REGISTRAR ESTUDIANTE</h1>
                <button wire:click="resetInput()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" class="form-horizontal" novalidate>
                    <?php echo csrf_field(); ?>

                    <div class="bg-secondary rounded-3 p-2 m-1 col-12">
                        <label for="padre_id" class="form-label">
                            <b>PADRE / TUTOR :</b>
                        </label>
                        <div>
                            
                            <a type="button" class="btn btn-sm  w-100
                            <?php if($padre_id == null): ?>
                            bg-danger
                            <?php else: ?>
                            bg-success
                            <?php endif; ?>
                            " data-bs-toggle="modal"
                                data-bs-target="#seleccionarPadre">
                                <?php if($padre_id == null): ?>
                                    <b>Buscar</b> <i class="fas fa-search"></i>
                                <?php else: ?>
                                    <?php echo e($ciPadre); ?> | <?php echo e($name); ?> <?php echo e($apellido); ?>

                                <?php endif; ?>
                            </a>

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

                    <div class="mb-3">
                        <label for="numCarnet" class="form-label">C.I.(Estudiante)</label>
                        <div class="input-group">
                            <input wire:model="numCarnet" type="text" class="form-control" id="numCarnet"
                                placeholder="C.I." aria-describedby="basic-addon1">
                        </div>
                        <?php $__errorArgs = ['numCarnet'];
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
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <div class="input-group">
                            <input wire:model="nombres" type="text" class="form-control" id="nombres"
                                placeholder="Nombres" aria-describedby="basic-addon2">
                        </div>
                        <?php $__errorArgs = ['nombres'];
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
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <div class="input-group">
                            <input wire:model="apellidos" type="text" class="form-control" id="apellidos"
                                placeholder="Apellidos" aria-describedby="basic-addon3">
                        </div>
                        <?php $__errorArgs = ['apellidos'];
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
                    <div class="mb-3">
                        <label for="numCelular" class="form-label">Número Celular (Opcional)</label>
                        <div class="input-group">
                            <input wire:model="numCelular" type="number" class="form-control" id="numCelular"
                                placeholder="Número Celular" aria-describedby="basic-addon4">
                        </div>
                    </div>
                    <?php $__errorArgs = ['numCelular'];
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
                <div class="d-grid gap-2 col-10 mx-auto">
                    <button type="submit" class="btn bg-success">REGISTRAR</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/estudiante/create.blade.php ENDPATH**/ ?>