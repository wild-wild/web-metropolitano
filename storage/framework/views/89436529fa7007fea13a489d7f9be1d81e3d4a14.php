<?php $__env->startSection('title', 'Configuracion'); ?>
<section class="contenido">
    <?php echo $__env->make('livewire.configuracion.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.configuracion.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="d-flex">
                                <a class="bg-dark text-light btn border-bottom border-2">
                                    <b>Listado de Usuarios</b> <i class="fa-solid fa-users"></i>
                                </a>
                            </div>
                            <a class="btn btn-sm bg-success" data-bs-toggle="modal" data-bs-target="#addUsuario">
                                Agregar Usuario
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr class="bg-dark">
                                        <td class="text-light text-center">#</td>
                                        <th class="text-light text-center">Nombre</th>
                                        <th class="text-light text-center">apellido</th>
                                        <th class="text-light text-center">Correo Electronico</th>
                                        <th class="text-light text-center">Rol</th>
                                        <td class="text-light text-center"><strong>Acción</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-center">
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td class="text-uppercase"><?php echo e($usuario->name); ?></td>
                                            <td class="text-uppercase"><?php echo e($usuario->apellido); ?></td>
                                            <td class="text-uppercase"><?php echo e($usuario->email); ?></td>
                                            <td class="text-uppercase">
                                                <?php if(!empty($usuario->getRoleNames())): ?>
                                                    <?php $__currentLoopData = $usuario->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rolNombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <h5><span class="badge bg-dark"><?php echo e($rolNombre); ?></span>
                                                        </h5>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </td>
                                            <td width="110">
                                                <div class="btn-group">
                                                    <a class="dropdown-item btn" data-bs-toggle="modal"
                                                        data-bs-target="#editUsuario"
                                                        wire:click="edit(<?php echo e($usuario->id); ?>) "><i
                                                            class="fa fa-edit"></i>
                                                    </a>
                                                    

                                                    <?php if($usuario->id == 1): ?>
                                                        <a class="dropdown-item btn disabled"><i
                                                                class="fa fa-trash"></i>
                                                        </a>
                                                    <?php else: ?>
                                                        <?php if($usuario->id == Auth::user()->id): ?>
                                                            <a class="dropdown-item btn disabled"><i
                                                                    class="fa fa-trash"></i>
                                                            </a>
                                                        <?php else: ?>
                                                            <a class="dropdown-item btn "
                                                                wire:click.prevent="delete(<?php echo e($usuario->id); ?>)"><i
                                                                    class="fa fa-trash"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                </div>
                                            </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($usuarios->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--alerta preventivo al eliminar Usuario -->
    <script>
        window.addEventListener('delete-confirmar', event => {
            Swal.fire({
                title: 'Eliminar Usuario?',
                text: "Confirma si desea Eliminar!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteuser')
                }
            })
        });
        window.addEventListener('destroyuser', event => {
            Swal.fire(
                'Eliminado!',
                'Has eliminado al Usuario',
                'success'
            )
        });
    </script>
</section>
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/livewire/configuracion/index.blade.php ENDPATH**/ ?>