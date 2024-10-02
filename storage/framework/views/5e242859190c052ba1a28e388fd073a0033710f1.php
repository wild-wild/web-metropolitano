<div wire:ignore.self id="updateLicencia" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Solicitud 📄</h1>
                <button wire:click="volverView()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update" class="form-horizontal" novalidate enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row d-flex justify-content-center align-content-center">
                        <div class="bg-secondary rounded-3 p-2 col-5 m-1">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Estudiante</label>
                            <select disabled wire:model.lazy="estudiante_id" class="form-control text-uppercase"
                                aria-label="Default select example">
                                <option selected>Seleccionar al Estudiante (Hijo/a)</option>
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
                                <option value="">Seleccione el curso</option>
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
                                <option value="">Seleccione la cantidad de Días</option>
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
                            <select wire:model="motivo" class="form-control text-uppercase"
                                aria-label="Default select example">
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
                        <div class="bg-secondary rounded-3 p-2 m-1 col-10">
                            <label class="form-label">Descripción de su Solicitud</label>
                            <textarea wire:model="descripcion" class="form-control" rows="3"></textarea>
                            
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
                        <div class="bg-secondary rounded-3 p-2 m-1 col-10 d-flex justify-content-center">
                            <?php if($docRespaldoExt == 'pdf'): ?>
                                <a class="btn bg-danger"
                                    href="<?php echo e(asset('storage/respaldos') . '/' . $docRespaldoName); ?>" target="_blank">
                                    Ver Pdf
                                </a>
                            <?php elseif(in_array($docRespaldoExt, ['jpg', 'png', 'jpeg'])): ?>
                                <a class="btn bg-success"
                                    href="<?php echo e(asset('storage/respaldos') . '/' . $docRespaldoName); ?>" target="_blank">
                                    
                                    Ver Documento Subido <i class="fa-solid fa-expand"></i>
                                </a>
                            <?php else: ?>
                                <span class="badge bg-danger text-dark">👌🏻 Solicitud
                                    Interna</span>
                            <?php endif; ?>
                        </div>
                        <div wire:ignore.self class="input-group mb-3 mt-2 col-10">
                            <label class="form-label">Adjuntar Archivo
                                <b class="text-danger">(Nota: el archivo subido debe ser en Formato: PDF, jpg o
                                    png)</b>
                            </label>
                            <label class="input-group-text" for="inputGroupFile02File"
                                style="cursor: pointer; width: 100%">
                                Subir Documento <i class="fa-solid fa-upload"></i>
                                <input wire:model="docRespaldo" required type="file" class="form-control"
                                    id="inputGroupFile02File" style="display: none;" onchange="uploadFileFile()">
                            </label>
                            
                            <input type="text" wire:model="docRespaldoExt" style="display: none;">
                            



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
                        <div wire:ignore.self id="uploadMessageFile" class="bg-success text-center"
                            style="display: none; border-radius: 10px">
                            Archivo cargado exitosamente.
                        </div>
                        <div id="progressContainerFile" style="display: none;">
                            <span>Cargando: <span id="progressCounterFile">0</span>%</span>
                            <progress style="width: 100%" id="progressBarFile" value="0"
                                max="100"></progress>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 col-10 mx-auto">
                    <button id="submit" type="submit" class="btn bg-success">ACTUALIZAR LA
                        SOLICITUD</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/update.blade.php ENDPATH**/ ?>