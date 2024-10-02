<?php if(now()->format('H:i') < '10:00' || now()->format('H:i') >= '12:00'): ?>

<form wire:submit.prevent="store" class="form-horizontal" novalidate enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="container">
        <div class="row d-flex justify-content-center align-content-center">
            <div class="bg-secondary rounded-3 p-2 col-5 m-1">
                <label for="exampleFormControlInput1" class="form-label">Nombre del Estudiante</label>
                <select wire:model.lazy="estudiante_id" class="form-control text-uppercase" aria-label="Default select example">
                    <option selected>Seleccionar al Estudiante (Hijo/a) 🔻</option>
                    <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option class="text-uppercase" value="<?php echo e($row->id); ?>">
                            <?php echo e($row->numCarnet); ?> | <?php echo e($row->nombres); ?> <?php echo e($row->apellidos); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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

            <div class="bg-secondary rounded-3 p-2 m-1 col-5">
                <label for="exampleFormControlInput1" class="form-label">Nombre del Curso</label>
                <select wire:model.lazy="curso_id" class="form-control text-uppercase">
                    <option value="">Seleccione el curso 🔻</option>
                    <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option class="text-uppercase" value="<?php echo e($row->id); ?>"><?php echo e($row->nombre); ?> |
                            <?php echo e($row->paralelo); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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
            <div class="bg-secondary rounded-3 p-2 m-1 col-5">
                <label for="exampleFormControlInput1" class="form-label">Duración de la Licencia</label>
                <select wire:model="tiempoLicencia" class="form-control text-uppercase">
                    <option value="">Seleccione la cantidad de Días 🔻</option>
                    <option value="1">1 Día de Licencia</option>
                    <option value="2">2 Días de Licencia</option>
                    <option value="3">3 Días de Licencia</option>
                    <option value="4">4 Días de Licencia</option>
                    <option value="5">5 Días de Licencia</option>
                    <option value="6">6 Días de Licencia</option>
                    <option value="7">7 Días de Licencia</option>
                </select>
                <?php $__errorArgs = ['tiempoLicencia'];
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

            <div class="bg-secondary rounded-3 p-2 m-1 col-5">
                <label for="exampleFormControlInput1" class="form-label">Motivo de Licencia</label>
                <select wire:model="motivo" class="form-control text-uppercase" aria-label="Default select example">
                    <option selected>SELECCIONE EL MOTIVO DE LA LICENCIA  🔻</option>
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

            <div class="bg-secondary rounded-3 p-2 m-1 col-10">
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

            <div wire:ignore.self class="input-group mb-3 mt-2 col-10">
                <label for="exampleFormControlTextarea1" class="form-label">Adjuntar Archivo
                    <b class="text-danger">(Nota: el archivo subido debe ser en Formato: PDF, jpg o png)</b>
                </label>
                <label class="input-group-text" for="inputGroupFile02" style="cursor: pointer; width: 100%">
                    Subir Archivo <i class="fa-solid fa-upload"></i>
                    <input wire:model="docRespaldo" type="file" class="form-control" id="inputGroupFile02"
                        style="display: none;" onchange="uploadFile()">
                </label>
                <?php $__errorArgs = ['docRespaldo'];
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
            <div wire:ignore.self id="uploadMessage" class="bg-success text-center" style="display: none; border-radius: 10px">
                Archivo cargado exitosamente.
            </div>
            <div wire:ignore.self id="progressContainer" style="display: none;">
                <span>Cargando: <span id="progressCounter">0</span>%</span>
                <progress style="width: 100%" id="progressBar" value="0" max="100"></progress>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="d-grid gap-2 col-10 mx-auto">
            <button id="submit" type="submit" class="btn bg-success" wire:loading.attr="disabled">
                <span wire:loading.remove>REGISTRAR LA SOLICITUD</span>
                <span wire:loading wire:target="store">
                    <i class="fas fa-spinner fa-spin"></i> Cargando...
                </span>
            </button>
        </div>
    </div>

</form>

<?php else: ?>
<div class="text-center">
    <h3>El registro de solicitudes solo está disponible después de las 12:00 PM, Hasta las 08:00 AM</h3>
    <div class="row m-3">
        <div class="hidden"><iframe
                src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FLa_Paz"
                width="100%" height="90" frameborder="0" seamless></iframe> </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/solicitar.blade.php ENDPATH**/ ?>