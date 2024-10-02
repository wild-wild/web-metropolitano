<?php $__env->startSection('title', 'REPORTE'); ?>
<div class="container-fluid mt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <div class  ="d-flex mb-2 bg-" style="justify-content:center; align-items: center;">
                        <div class="d-flex gap-2">
                            <label><b>Desde:</b></label>
                            <div>
                                <input type="date" wire:model="fechaIni" class="form-control"
                                    placeholder="Fecha de Inicio" required>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mx-2">
                            <label><b>Hasta:</b></label>
                            <div>
                                <input type="date" wire:model="fechaFin" class="form-control"
                                    placeholder="Fecha de Inicio" required>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mx-2">
                            <div>
                                <a wire:click="limpiarParametrosBuscar" type="submit"
                                    class="bg-warning btn rounded-circle">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex mb-2 gap-2 " style="justify-content:center; margin:0 0 0 40%">
                            <?php if($fechaIni && $fechaFin): ?>
                                <a href="<?php echo e(route('exportarReportePdf', array_filter(['fechaIni' => $fechaIni, 'fechaFin' => $fechaFin, 'curso_id' => $curso_id]))); ?>"
                                    target="_blank" class="bg-danger btn" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Descargar en PDF">
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                            <?php else: ?>
                                <a wire:click="mensajeSeleccioneFechas" class="bg-danger btn" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom"
                                    title="Selecciona un rango de fechas para habilitar la descarga en PDF" disabled>
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                            <?php endif; ?>
                            <button data-bs-toggle="tooltip" data-bs-placement="bottom" title="Descargar en Excel"
                                type="submit" class="bg-success btn">
                                <i class="fa-solid fa-file-csv"></i>
                            </button>
                        </div>
                    </div>
                    <div>

                        <div class="d-flex justify-content-between align-items-center input-group">
                            <div style="width: 30%;">
                                <select wire:model="curso_id" class="form-select rounded">
                                    <option value="">Todos los cursos</option>
                                    <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"><?php echo e($row->nombre); ?>

                                            <?php echo e($row->paralelo); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div style="width: 30%; margin: 0 10px 0 10px">
                                <select wire:model="tipoLicencia" class="form-select rounded">
                                    <option value="">Todos los tipos de licencia</option>
                                    <?php $__currentLoopData = $filtroTipoLicencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoLicencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tipoLicencia); ?>"><?php echo e($tipoLicencia); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>


                            <input style="width: 20%" wire:model='buscarRegistro' type="search"
                                class="form-control rounded" placeholder="Buscar 🔎" aria-label="Search"
                                value="<?php echo e(old('buscarRegistro')); ?>" aria-describedby="search-addon" />
                        </div>
                    </div>
                </div>
                <div class="card-body" style="font-size: 14px">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm table-hover">
                            <thead class="thead">
                                <tr class="bg-dark">
                                    <td class="text-light text-center">#</td>
                                    <th class="text-light text-center">C.I.</th>
                                    <th class="text-light text-center">Estudiante</th>

                                    <th class="text-light text-center">Curso</th>
                                    <th class="text-light text-center">Motivo</th>
                                    <th class="text-light text-center">Dias</th>
                                    <th class="text-light text-center">Solicitante</th>
                                    <th class="text-light text-center">Usuario (Acepto Solicitud)</th>
                                    <th class="text-light text-center">Cargo</th>
                                    <th class="text-light text-center">Solicitud</th>
                                    <th class="text-light text-center">Fecha</th>
                                    <td class="text-light text-center"><strong>Acción</strong></td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $reporte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center">
                                        <td><?php echo e(count($reporte) - $loop->iteration + 1); ?></td>
                                        <td><?php echo e($row->numCarnet); ?></td>
                                        <td><?php echo e($row->nombres . ' ' . $row->apellidos); ?></td>

                                        <td><?php echo e($row->nombre . ' ' . $row->paralelo); ?></td>
                                        <td><?php echo e($row->motivo); ?></td>
                                        <td><?php echo e($row->tiempoLicencia); ?></td>
                                        <td class="bg-success"><?php echo e($row->name); ?> <?php echo e($row->apellido); ?></td>
                                        
                                        <td><?php echo e($row->usuarioAcepto); ?></td>
                                        <td><?php echo e($row->usuarioAceptoCargo); ?></td>
                                        <td>
                                            <?php if($row->recibidoMediante == 'Solicitud interna'): ?>
                                                <span class="badge bg-warning"><?php echo e($row->recibidoMediante); ?></span>
                                            <?php else: ?>
                                                <span
                                                    class="badge bg-success text-black"><?php echo e($row->recibidoMediante); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e(\Carbon\Carbon::parse($row->updated_at)->format('d-m-Y H:i')); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('imprimirPdfLicencia', $row->id)); ?>" target="_blank"
                                                class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Generar">
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
            </div>
        </div>
    </div>
</div>
</section>
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/reporte/index.blade.php ENDPATH**/ ?>