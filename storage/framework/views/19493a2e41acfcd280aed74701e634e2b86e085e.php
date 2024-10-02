<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reporte de Licencia</title>
</head>
<style>
    * {
        font-size: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .textMn {
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
    }

    table,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .textDer {
        text-align: right;
    }

    .textIzq {
        text-align: left;
    }
</style>

<body>
    <p style="; position:fixed; margin:-15;">Fecha de Impresion : <?php echo e(date('d-m-Y (H:i)')); ?></p>
    <div class="table-responsive">
        <table width="100%" class="table default" cellpadding="0"
            style="padding: 0 0 5px 0;text-align: center;border-radius:10px; border:1;">
            <tbody>
                <tr>
                    <th style="background-color:#8D4925;
                    border-radius: 50 0 50 0">
                        <span style="font-size:15px;color: rgb(252, 252, 252);">Reporte de Licencia de
                            Estudiantes Registrados</span>
                    </th>
                    <th style="text-align: center;"><strong><img src="<?php echo e(public_path('img/logo.png')); ?>" width="40">
                            <br></strong>
                    </th>
                </tr>
            </tbody>
        </table>
        <table width="100%" cellspacing="2" cellpadding="2" class="table table-bordered" style="text-align: center;">
            <thead>
                <tr style="color:#ffffff;background-color:#8D4925;">
                    <td>#</td>
                    <th>C.I.</th>
                    <th>Estudiante</th>

                    <th>Curso</th>
                    <th>Motivo</th>
                    <th>Dias</th>
                    <th>Solicitante</th>
                    <th>Usuario (Acepto Solicitud)</th>
                    <th>Solicitud</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $reporte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e(count($reporte) - $loop->iteration + 1); ?></td>
                        <td><?php echo e($row->numCarnet); ?></td>
                        <td><?php echo e($row->nombres . ' ' . $row->apellidos); ?></td>

                        <td><?php echo e($row->nombre.' '.$row->paralelo); ?></td>
                        <td><?php echo e($row->motivo); ?></td>
                        <td><?php echo e($row->tiempoLicencia); ?></td>
                        <td class="bg-success"><?php echo e($row->name); ?> <?php echo e($row->apellido); ?></td>
                        
                        <td><?php echo e($row->usuarioAcepto); ?></td>
                        <td>
                            <?php if($row->recibidoMediante == 'Solicitud interna'): ?>
                                <span class="badge bg-warning"><?php echo e($row->recibidoMediante); ?></span>
                            <?php else: ?>
                                <span class="badge bg-success text-black"><?php echo e($row->recibidoMediante); ?></span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e(\Carbon\Carbon::parse($row->updated_at)->format('d-m-Y H:i')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="8" class="text-center"><b>No hay registros 😕</b></td>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/reporte/reportePdf.blade.php ENDPATH**/ ?>