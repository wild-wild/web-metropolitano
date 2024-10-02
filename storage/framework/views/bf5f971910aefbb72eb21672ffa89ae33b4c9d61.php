<div wire:ignore.self id="verificarLicencia" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar Solicitud Recibida 📄</h1>
                <button wire:click="volverView()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="confirmarSolicitud" class="form-horizontal" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row d-flex justify-content-center align-content-center">
                        <div class="bg-secondary rounded-3 p-2 m-1 col-10">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Padre/Madre/Tutor(a)</label>
                            <select disabled wire:model.lazy="user_id" class="form-control text-uppercase">
                                <option value="">Seleccione</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-uppercase" value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?>

                                        <?php echo e($row->apellido); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            
                            <?php $__errorArgs = ['user_id'];
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
                                href="<?php echo e(asset('storage/respaldos') . '/' . $docRespaldoName); ?>"
                                target="_blank">
                                Ver Pdf
                            </a>
                        <?php elseif(in_array($docRespaldoExt, ['jpg', 'png', 'jpeg'])): ?>
                            <a class="btn bg-success"  href="<?php echo e(asset('storage/respaldos') . '/' . $docRespaldoName); ?>"
                                target="_blank">
                                
                                    Ver Documento Subido <i class="fa-solid fa-expand"></i>
                            </a>
                        <?php else: ?>
                            <span class="badge bg-danger text-dark">👌🏻 Solicitud
                                Interna</span>
                        <?php endif; ?>
                        </div>

                        <div class="bg-secondary rounded-3 p-2 m-1 col-10">
                            <label for="estadoSolicitud">Estado de Solicitud: <b class="bg-danger rounded-3 px-1">(Aceptar o Rechazar Solicitud)</b></label>
                            <select wire:model.lazy="estadoSolicitud" class="form-control" required>
                                <option value="" selected>¿Verificar Solicitud?</option>
                                <option value="1">Aceptada ✅</option>
                                <option value="2">Rechazada ❌</option>
                            </select>
                        </div>
                        <?php $__errorArgs = ['estadoSolicitud'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="bg-secondary rounded-3 p-2 m-1 col-10">
                            <label class="form-label">Mensaje<b
                                    class="bg-danger rounded-3 px-1">(Envia un Mensaje-Opcional)</b></label>
                            <textarea wire:model='mensajeRespuesta' class="form-control" rows="3"></textarea>
                            <?php $__errorArgs = ['mensajeRespuesta'];
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
            </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 col-10 mx-auto">
                    <button id="submit" type="submit" class="btn bg-success">ACEPTAR CAMBIOS</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/verificar.blade.php ENDPATH**/ ?>