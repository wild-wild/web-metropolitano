<div  wire:ignore.self id="updateEstudiante" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">ACTUALIZAR ESTUDIANTE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update" class="form-horizontal" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Datos del Padre</label>
                        <select wire:model="padre_id" class="form-control text-uppercase">
                            <option value="">Seleccione al  Padre/Tutor</option>
                            <?php $__currentLoopData = $padres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option class="text-uppercase" value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?>

                                    <?php echo e($row->apellido); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="numCarnet" class="form-label">C.I. (Estudiante)</label>
                        <div class="input-group">
                            <input wire:model="numCarnet" type="text" class="form-control" id="numCarnet" placeholder="C.I." aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <div class="input-group">
                            <input wire:model="nombres" type="text" class="form-control" id="nombres" placeholder="Nombres" aria-describedby="basic-addon2">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <div class="input-group">
                            <input wire:model="apellidos" type="text" class="form-control" id="apellidos" placeholder="Apellidos" aria-describedby="basic-addon3">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="numCelular" class="form-label">Número Celular</label>
                        <div class="input-group">
                            <input wire:model="numCelular" type="text" class="form-control" id="numCelular" placeholder="Número Celular" aria-describedby="basic-addon4">
                        </div>
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
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/estudiante/update.blade.php ENDPATH**/ ?>