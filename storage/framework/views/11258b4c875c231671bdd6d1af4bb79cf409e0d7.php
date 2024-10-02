<div wire:ignore.self id="viewLicenciasSolicitadas" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">LISTA DE SOLICITUDES</h1>
                <button wire:click="resetInput()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive mitabla">
                    <table class="table table-bordered table-sm table-hover">
                        <thead class="thead">
                            <tr class="bg-dark">
                                <td class="text-light text-center align-middle">#</td>
                                <th class="text-light text-center align-middle">C.I.</th>
                                <th class="text-light text-center align-middle">Nombres y Apellidos</th>
                                <th class="text-light text-center align-middle">Curso</th>
                                <th class="text-light text-center align-middle">Motivo</th>
                                <th class="text-light text-center align-middle">Fecha de Envio</th>
                                <th class="text-light text-center align-middle">Documento</th>
                                <th class="text-light text-center align-middle">Estado de Solicitud</th>
                                <td class="text-light text-center align-middle"><strong>Acción</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $licenciasPendientesRechazadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center ">
                                    <td class="text-center align-middle "><?php echo e($loop->iteration); ?></td>
                                    <td class="text-center align-middle "><?php echo e($row->numCarnet); ?></td>
                                    <td class="text-center align-middle "><?php echo e($row->nombres); ?> <?php echo e($row->apellidos); ?></td>
                                    <td class="text-center align-middle "><?php echo e($row->nombre); ?> (<?php echo e($row->paralelo); ?>)
                                    </td>
                                    <td class="text-center align-middle "><?php echo e($row->motivo); ?></td>

                                    <td class="text-center align-middle ">
                                        <?php echo e(\Carbon\Carbon::parse($row->created_at)->format('d-m-Y H:i')); ?>

                                    </td>
                                    <td class="text-center align-middle">
                                        <?php if($row->docRespaldoExt == 'pdf'): ?>
                                            <a class="btn bg-danger"
                                                href="<?php echo e(asset('storage/respaldos') . '/' . $row->docRespaldoName); ?>"
                                                target="_blank">
                                                Ver Pdf
                                            </a>
                                        <?php elseif(in_array($row->docRespaldoExt, ['jpg', 'png', 'jpeg'])): ?>
                                            <a href="<?php echo e(asset('storage/respaldos') . '/' . $row->docRespaldoName); ?>"
                                                target="_blank">
                                                <img src="<?php echo e(asset('storage/respaldos') . '/' . $row->docRespaldoName); ?>"
                                                    alt="IMG" class="img-fluid" style="height: 50px">
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center align-middle ">
                                        <?php if($row->estadoSolicitud == 0): ?>
                                            <span class="badge bg-warning text-dark">Solicitud enviada</span>
                                        <?php elseif($row->estadoSolicitud == 1): ?>
                                            <span class="badge bg-success text-dark">Solicitud aceptada</span>
                                        <?php elseif($row->estadoSolicitud == 2): ?>
                                            <span class="badge bg-danger text-dark">Solicitud rechazada</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center align-middle ">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('licencia-confirmar')): ?>
                                            <a class="btn btn-sm btn-success"
                                                wire:click='verificarSolicitud(<?php echo e($row->id); ?>)' data-bs-toggle="modal"
                                                data-bs-target="#verificarLicencia">
                                                Verificar<i class="fa-solid fa-circle-check"></i>
                                            </a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('licencia-editar')): ?>
                                            <?php if($row->estadoSolicitud == 0): ?>
                                                <a class="btn btn-sm btn-success" wire:click='edit(<?php echo e($row->id); ?>)'
                                                    data-bs-toggle="modal" data-bs-target="#updateLicencia">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a class="btn btn-sm btn-danger" wire:click='delete(<?php echo e($row->id); ?>)'>
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            <?php elseif($row->estadoSolicitud == 2): ?>
                                            <a wire:click='verMensaje(<?php echo e($row->id); ?>)' data-bs-toggle="modal"
                                                data-bs-target="#"
                                                class="btn btn-sm btn-warning position-relative mx-4">
                                                <i class="fa-regular fa-envelope"></i>
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                   Mensaje
                                                </span>
                                            </a>
                                            <a class="btn btn-sm btn-success" wire:click='edit(<?php echo e($row->id); ?>)'
                                                data-bs-toggle="modal" data-bs-target="#updateLicencia">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a class="btn btn-sm btn-danger" wire:click='delete(<?php echo e($row->id); ?>)'>
                                                <i class="fas fa-trash"></i>
                                            </a>


                                            <?php elseif($row->estadoSolicitud == 1): ?>
                                                <span class="badge bg-success text-dark"><i
                                                        class="fa-solid fa-circle-check"></i></span>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="resetInput()" class="btn btn-danger"
                    data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/view.blade.php ENDPATH**/ ?>