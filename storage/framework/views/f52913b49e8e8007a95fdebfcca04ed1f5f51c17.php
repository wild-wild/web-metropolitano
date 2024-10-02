<?php $__env->startSection('title', 'Estudiante'); ?>
<div class="container-fluid mt-2">
    <?php echo $__env->make('livewire.estudiante.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.estudiante.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="d-flex">
                            <a  class="move-left btn">
                                <b>Estudiantes</b> <i class="fas fa-user-graduate"></i>
                        </div>

                        <div class="d-flex input-group w-auto">
                            <input wire:model='keyWord' type="search" class="form-control rounded" placeholder="Buscar"
                                aria-label="Search" value="<?php echo e(old('search')); ?>" aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>



                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createEstudiante">
                            Registrar Estudiante
                        </a>

                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive mitabla">
                        <table class="table table-bordered table-sm table-hover">
                            <thead class="thead">
                                <tr class="bg-dark">
                                    <td class="text-light text-center">#</td>
                                    <th class="text-light text-center">Padre/Tutor</th>
                                    <th class="text-light text-center">C.I.</th>
                                    <th class="text-light text-center">Nombres</th>
                                    <th class="text-light text-center">Apellidos</th>
                                    <th class="text-light text-center">Nro. Celular</th>
                                    <td class="text-light text-center"><strong>Acción</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center">
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td class="bg-success"><?php echo e($row->name); ?> <?php echo e($row->apellido); ?></td>
                                        <td><?php echo e($row->numCarnet); ?></td>
                                        <td><?php echo e($row->nombres); ?></td>
                                        <td><?php echo e($row->apellidos); ?></td>
                                        <td><i class="fa-solid fa-phone"></i> <?php echo e($row->numCelular); ?></td>
                                        <td>
                                            
                                            <a class="btn btn-sm btn-success" wire:click='edit(<?php echo e($row->id); ?>)'
                                                data-bs-toggle="modal" data-bs-target="#updateEstudiante">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            
                                            <a class="btn btn-sm btn-danger" wire:click='delete(<?php echo e($row->id); ?>)'>
                                                <i class="fas fa-trash"></i>
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
<?php echo $__env->make('livewire.estudiante.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/estudiante/index.blade.php ENDPATH**/ ?>