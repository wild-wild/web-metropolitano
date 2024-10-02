<form wire:submit.prevent="createSolicitud" class="form-horizontal" novalidate enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    
    <div  class="bg-secondary rounded-3 p-2 m-1 col-12">
        <label for="estudiante_id" class="form-label">
            <b>Estudiante :</b>
            <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                title="Realice la búsqueda del estudiante por su número de carnet o nombre del estudiante 👨‍🎓"></i>
        </label>
        <div wire:ignore x-data="{}" x-init="() => {
            $('#estudiante_id').select2();
            $('#estudiante_id').on('change', function(e) {
                window.livewire.find('<?php echo e($_instance->id); ?>').set('estudiante_id', e.target.value);
            });
        }">
            <select wire:model.lazy="estudiante_id" name="estudiante_id" id="estudiante_id" class="select2"
                style="width: 100%;">
                <option value="">Seleccione Estudiante por Numero de C.I.</option>
                <?php $__currentLoopData = $estudiantesAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option class="text-uppercase" value="<?php echo e($row->id); ?>">
                        <?php echo e($row->numCarnet); ?> | <?php echo e($row->nombres); ?> <?php echo e($row->apellidos); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <?php $__errorArgs = ['estudiante_id'];
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

    
    <div class="bg-secondary rounded-3 p-2 m-1 col-12">
        <label for="curso_id" class="form-label">
            <b>Curso :</b>
            <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-title="Realice la búsqueda del curso por su nombre o paralelo 👨‍🎓"></i>
        </label>
        <div wire:ignore x-data="{}" x-init="() => {
            $('#curso_id').select2();
            $('#curso_id').on('change', function(e) {
                window.livewire.find('<?php echo e($_instance->id); ?>').set('curso_id', e.target.value);
            });
        }">
            <select wire:model.lazy="curso_id" name="curso_id" id="curso_id" class="select2" style="width: 100%;">
                <option value="">Seleccione el Curso</option>
                <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option class="text-uppercase" value="<?php echo e($row->id); ?>">
                        <?php echo e($row->nombre); ?> | <?php echo e($row->paralelo); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <?php $__errorArgs = ['curso_id'];
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


    <div class="bg-secondary rounded-3 p-2 m-1 col-12">
        <label for="motivo" class="form-label">Motivo de Licencia</label>
        <select wire:model="motivo" class="form-control text-uppercase" id="motivo">
            <option value="" selected>SELECCIONE EL MOTIVO DE LA LICENCIA 🔻</option>
            <option value="Licencia por Enfermedad">Licencia por Enfermedad</option>
            <option value="Asuntos Familiares Urgentes">Asuntos Familiares Urgentes</option>
            <option value="Licencia por trabajo">Licencia por trabajo</option>
            <option value="Otros (Especificar)">Otros (Especificar)</option>
        </select>
        <?php $__errorArgs = ['motivo'];
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
    <div class="bg-secondary rounded-3 p-2 m-1 col-12">
        <label  class="form-label">Descripción de su Solicitud</label>
        <textarea placeholder="Escribe una descripción de su solicitud ✍🏻" wire:model="descripcion" class="form-control" rows="3"></textarea>
        <?php $__errorArgs = ['descripcion'];
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

    <div class="modal-footer text-center ">
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
    </div>
</form>
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/create.blade.php ENDPATH**/ ?>