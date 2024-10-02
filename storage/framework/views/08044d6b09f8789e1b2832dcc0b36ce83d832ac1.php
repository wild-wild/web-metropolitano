<div wire:ignore class="form-control" x-data="{}" x-init="() => {
    $('.select2').select2();
    $('.select2').on('change', function(e) {
        let elementName = $(this).attr('id');
        window.livewire.find('<?php echo e($_instance->id); ?>').set(elementName, e.target.value);
    })
}">
    <select class="select2 " <?php echo e($attributes); ?> style="width: 100%;">
        <option value="">Seleccione Estudiante | por Numero de CI</option>
        <?php $__currentLoopData = $padresAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option class="text-uppercase" value="<?php echo e($row->id); ?>"><?php echo e($row->ciPadre); ?> | <?php echo e($row->name); ?>

                <?php echo e($row->apellido); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH C:\Users\wilder poma flores\Documents\MI REPOSITORIO\sistemaDeLicencias_Gustavo\resources\views/components/select-componente.blade.php ENDPATH**/ ?>