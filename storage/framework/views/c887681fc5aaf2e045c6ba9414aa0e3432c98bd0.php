<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Licencias de Estudiante </title>
</head>
<style>
    body {
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .textMn {
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
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


    .mayu {
        text-transform: uppercase;
    }

    .firmas {
        text-align: center;
        display: flex;
        justify-content: space-around;
    }

    /* ------ */
    .table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
        margin: 0 auto;
        border: 0px;
    }

    .td {
        border: 0;
        padding: 5px;
    }
</style>

<body>
    <p class="text-size" style="; position:fixed; margin:-25;">Fecha de Impresión :<?php echo e(date('d-m-Y (H:i)')); ?> </p>
    <div class="table-responsive">
        <table width="100%" class="table default" cellspacing="0" cellpadding="0"
            style="text-align: center;border-radius:10px;border:1;">
            <tbody>
                <tr>
                    <th style="text-align: center; margin: 0 15px 0 0;  ">
                        <img src="<?php echo e(public_path('img/logo.png')); ?>" width="100">
                    </th>
                    <th
                        style="font-size:10px;font-family:Arial, Helvetica, sans-serif; background-color:#ffffff;border-radius: 30 0 30 0;width:auto">
                        <h1 style="color: rgb(0, 0, 0);">U.E. "SAN FRANCISCO SUR"</h1>

                        <h5>Dirección: Av. Bolivia-calle Palmar entre amistad</h5>
                        <h5>Zona los lotes, Barrio "24 de junio"</h5>
                        <h5>Celular: 72493621</h5><br>
                        <h1 style="color: rgb(0, 0, 0)">LICENCIA</h1>
                    </th>
                    <th style="text-align: center;">
                        <div style="">
                            <img src="<?php echo e(public_path('img/imagenes/minedu.PNG')); ?>" width="100">
                        </div>
                    </th>
                </tr>
            </tbody>
        </table>
        <table class="table default" width="100%" cellspacing="0" cellpadding="0" border="1"
            style="text-align: center;border-radius:10px;">
            <tbody>
                <tr>
                    <td class="textIzq" colspan="4"><span>Fecha de
                            registro: <?php echo e(date('d F Y H:i', strtotime($estudiante->created_at))); ?>

                        </span></td>
                </tr>
                <tr>
                    <td style="background-color:#b4b2b2;
                        height: 25px;"colspan="4">
                        <b>ESTUDIANTE</b></td>
                </tr>
            </tbody>
        </table>
        <table border="1" class="table default" width="100%"style="text-align: left;">
            <tr>
                <td width="30%">
                    <b>Apellidos : 
                        <?php echo e($estudiante->apellidos); ?></b>
                    </b>
                </td>
                <td width="40%">
                    <b>Nombre(s): <?php echo e($estudiante->nombres); ?></b>
                </td>
            </tr>
        </table>
        <table class="table default" width="100%" cellspacing="0" cellpadding="0" border="1"
            style="text-align: center;border-radius:10px;">
            <tbody>
                <tr>
                    <td style="background-color:#b4b2b2;height: 25px;" colspan="4"><b>CURSO</b></td>
                </tr>
            </tbody>
        </table>
        <table border="1" class="table default" width="100%">
            <tr>
                <td width="50%">
                    <b>Curso: <?php echo e($curso->nombre); ?></b>
                </td>
                <td width="50%">
                    <b>Paralelo: <?php echo e($curso->paralelo); ?></b>
                </td>
            </tr>
            <tr>
                <td class="textIzq" colspan="4"><span><b>Dia(s): <?php echo e($licencia->tiempoLicencia); ?></b></span></td>
            </tr>
        </table>
        <table class="table default" width="100%" cellspacing="0" cellpadding="0" border="1"
            style="text-align: center;border-radius:10px;">
            <tbody>
                <tr>
                    <td style="background-color:#b4b2b2;height: 25px;" colspan="4"><b>MOTIVOS </b></td>
                </tr>
            </tbody>
        </table>
        <table border="1" class="table default" width="100%">
            <tr style="text-align: left; height: 30px">
                <td width="30%"><b>Motivo: <?php echo e($licencia->motivo); ?></b>
                </td>
                <td width="70%"><b>Descripción: <?php echo e($licencia->descripcion); ?></b>
                </td>
            </tr>
        </table>
        <table class="table default" width="100%" cellspacing="0" cellpadding="0" border="1"
            style="text-align: center;border-radius:10px;">
            <tbody>
                <tr>
                    <td style="background-color:#b4b2b2;height: 25px;" colspan="4"><b>SOLICITANTE:PADRE/TUTOR</b>
                    </td>
                </tr>
            </tbody>
        </table>
        <table border="1" class="table default" width="100%"style="text-align: left;">
            <tr>
                <td width="30%">
                    <b>Apellidos: <?php echo e($userSolicitante->apellido); ?></b>
                </td>
                <td width="40%">
                    <b>Nombre(s): <?php echo e($userSolicitante->name); ?></b>
                </td>
            </tr>
        </table>
        <table class="table default" width="100%" cellspacing="0" cellpadding="0" border="1"
            style="text-align: center;border-radius:10px;">
            <tbody>
                <tr>
                    <td style="background-color:#b4b2b2;height: 25px;" colspan="4"><b>RECEPCIÓN</b></td>
                </tr>
            </tbody>
        </table>
        <table border="1" class="table default" width="100%"style="text-align: left;">
            <tr>
                <td width="25%">
                    <b>Nombre(s) y Apellidos: <?php echo e($licencia->usuarioAcepto); ?></b>
                </td>
                </td>
                <td width="20%">
                    <b>Cargo: <?php echo e($licencia->usuarioAceptoCargo); ?></b>
                </td>
            </tr>
        </table>
        <br>
        <br>       
        <table class="table table-footer">
            <tr>
               
                <td class="td">
                    <hr width="25%">
                    <b>ADMINISTRACIÓN</b><br>
                </td>
            </tr>
        </table>

</body>

</html>
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/licencia/reporteLicencia.blade.php ENDPATH**/ ?>