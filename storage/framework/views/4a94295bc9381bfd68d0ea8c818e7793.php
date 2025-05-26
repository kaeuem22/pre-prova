<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Editar Categoria</h1>
    <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" class="form-control"
            name="description" value="<?php echo e($category->description); ?>">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/categories/edit.blade.php ENDPATH**/ ?>