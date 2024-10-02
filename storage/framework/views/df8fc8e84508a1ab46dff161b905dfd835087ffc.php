<?php $__env->startSection('title', 'Licencias'); ?>

<div class="container-fluid mt-2">
    <?php echo $__env->make('livewire.licencia.view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($alertMessage): ?>
        <div class="alert alert-success">
            <?php echo e($alertMessage); ?>

        </div>
    <?php endif; ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="d-flex">
                            <b>Solicitud de Licencias</b> <i class="bi bi-bookmarks"></i>
                        </div>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('licencia-search')): ?>
                            <div class="d-flex input-group w-auto">
                                <input wire:model='keyWord' type="search" class="form-control rounded" placeholder="Buscar"
                                    aria-label="Search" value="<?php echo e(old('search')); ?>" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                        <?php endif; ?>
                        <div>
                            
                            <a data-bs-toggle="modal" data-bs-target="#viewLicenciasSolicitadas"
                                class="btn btn-primary btn-sm position-relative mx-5">
                                <i class="fa-solid fa-eye"></i> Solicitudes
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('licencia-notificacion')): ?>
                                    <?php if($contadorLicencias == 0): ?>
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            <i class="fa-solid fa-bell"></i> No hay Solicitudes
                                        </span>
                                    <?php else: ?>
                                        <span
                                            class="notificacion position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            <i class="fa-solid fa-bell"></i> <?php echo e($contadorLicencias); ?> Solicitudes
                                        </span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </a>
                            
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('licencia-crear')): ?>
                                <a wire:click="toggleSeccion" class="btn btn-sm btn-primary" id="toggleButton">
                                    <i class="fa-regular fa-clipboard"></i> Registrar Licencia
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('licencia-index')): ?>
                        
                        <?php if($seccionVisible): ?>
                            <div>
                                <?php echo $__env->make('livewire.licencia.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php else: ?>
                            <div style="font-size: 13px">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm table-hover">
                                        <thead class="thead">
                                            <tr class="bg-dark">
                                                <td class="text-light text-center align-middle">#</td>
                                                <th class="text-light text-center align-middle">Solicitante</th>
                                                <th class="text-light text-center align-middle">C.I.</th>
                                                <th class="text-light text-center align-middle">Nombres y Apellidos</th>
                                                <th class="text-light text-center align-middle">Curso</th>
                                                <th class="text-light text-center align-middle">Materias</th>
                                                <th class="text-light text-center align-middle">Motivo</th>
                                                <th class="text-light text-center align-middle">Fecha de Envio</th>
                                                <th class="text-light text-center align-middle">Documento</th>
                                                <th class="text-light text-center align-middle">Estado de Solicitud</th>
                                                <td class="text-light text-center align-middle"><strong>Acción</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $licenciasAceptadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="text-center">
                                                    <td class="text-center align-middle "><?php echo e($loop->iteration); ?></td>
                                                    <td class="text-center align-middle">
                                                        <?php echo e($row->name . ' ' . $row->apellido); ?></td>

                                                    <td class="text-center align-middle "><?php echo e($row->numCarnet); ?></td>
                                                    <td class="text-center align-middle "><?php echo e($row->nombres); ?>

                                                        <?php echo e($row->apellidos); ?></td>
                                                    <td class="text-center align-middle "><?php echo e($row->nombre); ?>

                                                        (<?php echo e($row->paralelo); ?>)
                                                    </td>
                                                    <td class="text-center align-middle ">
                                                        <?php
                                                            $materias = json_decode($row->materias);
                                                        ?>
                                                        <?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <span class="badge bg-primary text-dark">
                                                                <?php echo e($materia); ?>

                                                            </span>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                        <?php else: ?>
                                                            <span class="badge bg-danger text-dark">👌🏻 Solicitud
                                                                Interna</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-center align-middle ">
                                                        <?php if($row->estadoSolicitud == 0): ?>
                                                            <span class="badge bg-warning text-dark">Solicitud
                                                                enviada</span>
                                                        <?php elseif($row->estadoSolicitud == 1): ?>
                                                            <span class="badge bg-success text-dark">Solicitud
                                                                aceptada</span>
                                                        <?php elseif($row->estadoSolicitud == 2): ?>
                                                            <span class="badge bg-danger text-dark">Solicitud
                                                                rechazada</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-center align-middle ">
                                                        
                                                            
                                                            <a href="<?php echo e(route('imprimirPdfLicencia', $row->id)); ?>"
                                                                target="_blank" class="btn btn-sm btn-danger"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Generar">
                                                                <i class="fa-solid fa-file-pdf"></i>
                                                            </a>
                                                        
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
                        <?php endif; ?>
                        
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('licencia-solicitar')): ?>
                        <?php echo $__env->make('livewire.licencia.solicitar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('livewire.licencia.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('licencia-confirmar')): ?>
                        <?php echo $__env->make('livewire.licencia.verificar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if( $contadorLicencias ): ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#viewLicenciasSolicitadas').modal('show');
        });
    </script>
<?php $__env->stopPush(); ?>
<?php endif; ?>


<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/index.blade.php ENDPATH**/ ?>