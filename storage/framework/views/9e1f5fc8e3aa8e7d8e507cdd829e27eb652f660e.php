<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
        <i class="far fa-bell text-black mx-3" style="width: 15px"></i>
        <span class="badge badge-warning navbar-badge">
            <?php echo e(auth()->user()->unreadNotifications->count() > 0? auth()->user()->unreadNotifications->count(): '0'); ?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <span
            class="dropdown-item dropdown-header"><?php echo e(auth()->user()->unreadNotifications->count() > 0? auth()->user()->unreadNotifications->count(): '0'); ?>

            Notifications</span>
        <div class="dropdown-divider"></div>
        <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('mostrarNotificacion', [$row->id, $row->data['id']])); ?>" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i>
                <?php echo e($row->data['motivo']); ?>

                <p class="text-sm"><?php echo e($row->data['name']); ?> <?php echo e($row->data['apellido']); ?> <span
                        class="float-right text-muted text-sm"><?php echo e($row->created_at->diffForHumans()); ?></span></p>
            </a>
            <div class="dropdown-divider"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</li>
<?php /**PATH C:\Users\HP\Documents\REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/layouts/notificacion.blade.php ENDPATH**/ ?>