<?php $__env->startSection('title', 'Padres'); ?>
<div class="container-fluid mt-2">
    <?php echo $__env->make('livewire.padre.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.padre.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="d-flex">
                            <a  class="move-left btn">
                                <b>Padres des</b> <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="d-flex input-group w-auto">
                            <input wire:model='keyWord' type="search" class="form-control rounded" placeholder="Buscar"
                                aria-label="Search" value="<?php echo e(old('search')); ?>" aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createPadre">
                            Registrar Padres/Madres de Familia
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive mitabla">
                        <table class="table table-bordered table-sm table-hover">
                            <thead class="thead">
                                <tr class="bg-dark">
                                    <td class="text-light text-center">#</td>
                                    <th class="text-light text-center">C.I.</th>
                                    <th class="text-light text-center">Nombres</th>
                                    <th class="text-light text-center">Apellidos</th>
                                    <th class="text-light text-center">Correo Electronico</th>
                                    <th class="text-light text-center">Nro. Celular</th>
                                    <td class="text-light text-center"><strong>Acción</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center">
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td class="text-uppercase"><?php echo e($row->ciPadre); ?></td>
                                    <td class="text-uppercase"><?php echo e($row->name); ?></td>
                                    <td class="text-uppercase"><?php echo e($row->apellido); ?></td>
                                    <td class="text-uppercase"><?php echo e($row->email); ?></td>
                                    <td class="text-uppercase"><i class="fa-solid fa-phone"></i> <?php echo e($row->telefono); ?></td>
                                    <td width="110">
                                        <div class="btn-group">
                                            <a class="btn bg-success" data-bs-toggle="modal"
                                                data-bs-target="#updatePadre"
                                                wire:click="edit(<?php echo e($row->id); ?>) "><i
                                                    class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn bg-warning"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Restablecer Contraseña, su nueva contraseña sera : nueva12345678"
                                                wire:click="restaurar_contrasena(<?php echo e($row->id); ?>) "><i class="fa-solid fa-arrows-rotate"></i>
                                            </a>
                                            <a class="btn bg-danger"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Eliminar"
                                                wire:click="delete(<?php echo e($row->id); ?>) ">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
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
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/padre/index.blade.php ENDPATH**/ ?>