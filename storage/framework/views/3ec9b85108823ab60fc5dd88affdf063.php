
<?php $__env->startSection('contenido'); ?>
<form method="POST" action="<?php echo e(route('testvak.index')); ?>">
    <?php echo csrf_field(); ?> 

    <label>nombre</label>
    <input type="text" name="nombre"
           value="<?php echo e(old('nombre')); ?>">



    <button type="submit">Guardar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\test_vak\resources\views/vak_views/mostrar_test_vak.blade.php ENDPATH**/ ?>