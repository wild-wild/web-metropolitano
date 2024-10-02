
<?php $__env->startSection('title', 'Materia'); ?>
    <div class="container-fluid mt-2">
        <?php echo $__env->make('livewire.materia.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('livewire.materia.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="d-flex">
                                <a class="move-left btn">
                                    <b>Materia</b> <i class="bi bi-bookmarks"></i>
                            </div>

                            <div class="d-flex input-group w-auto">
                                <input type="search" class="form-control rounded" placeholder="Buscar"
                                    aria-label="Search" value="<?php echo e(old('search')); ?>" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createMateria">
                                Registrar Materia
                            </a>

                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive mitabla">
                            <table class="table table-bordered table-sm table-hover">
                                <thead class="thead">
                                    <tr class="bg-dark">
                                        <td class="text-light text-center">#</td>
                                        <th class="text-light text-center">Sigla</th>
                                        <th class="text-light text-center">Materia</th>
                                        <td class="text-light text-center"><strong>Acción</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-center">
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($row->codigo); ?></td>
                                            <td><?php echo e($row->materia); ?></td>
                                           
                                            <td>
                                                <a class="btn btn-sm btn-success" wire:click='edit(<?php echo e($row->id); ?>)'
                                                    data-bs-toggle="modal" data-bs-target="#updateMateria">
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
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/materia/index.blade.php ENDPATH**/ ?>