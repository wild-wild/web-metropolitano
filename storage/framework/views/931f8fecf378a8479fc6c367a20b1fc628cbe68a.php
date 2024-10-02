<?php $__env->startSection('title', 'Roles'); ?>
    <?php echo $__env->make('livewire.role.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.role.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="d-flex ">
                                <a class=" btn border-top border-end border-start border-2 bg-c-se co-ho-bla-pri">
                                    <b>Roles | Listado</b> <i class="fa-solid fa-people-group"></i>
                                </a>
                            </div>
                            <a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#createRol">
                                Registrar Rol
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead class="thead bg-dark">

                                    <tr class="text-center">
                                        <td class="text-light">#</td>
                                        <th class="text-light">Rol</th>
                                        <td class="text-light"><strong>Acción</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-center text-uppercase">
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($row->name); ?></td>
                                            <td>
                                                <a class="btn btn-sm bg-success" data-bs-toggle="modal"
                                                    data-bs-target="#updateRol" wire:click="edit(<?php echo e($row->id); ?>)">
                                                    <i class="fa-solid fa-edit"
                                                        wire:click="edit(<?php echo e($row->id); ?>)"></i>
                                                </a>
                                                <a class="btn btn-sm bg-danger"
                                                    wire:click="delete(<?php echo e($row->id); ?>)">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\plantilla admin LTE\plantilla\resources\views/livewire/role/index.blade.php ENDPATH**/ ?>