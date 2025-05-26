<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Editar Categoria</h1>
    <form action="<?php echo e(route('suppliers.update', $supplier->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-name">
            <label for="description">Nome</label>
            <input type="text" class="form-control"
            name="name" value="<?php echo e($supplier->name); ?>">

            <label for="cnpj">Cnpj</label>
            <input type="text" class="form-control"
            name="cnpj" value="<?php echo e($supplier->cnpj); ?>">

            <label for="phone">Telefone</label>
            <input type="text" class="form-control"
            name="phone" value="<?php echo e($supplier->phone); ?>">

            <label for="address">Endereço</label>
            <input type="text" class="form-control"
            name="address" value="<?php echo e($supplier->address); ?>">

            <label for="district">Bairro</label>
            <input type="text" class="form-control"
            name="district" value="<?php echo e($supplier->district); ?>">

            <label for="city">Estado</label>
            <input type="text" class="form-control"
            name="city" value="<?php echo e($supplier->city); ?>">

            <label for="zipcode">CEP</label>
            <input type="text" class="form-control"
            name="zipcode" value="<?php echo e($supplier->zipcode); ?>">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/suppliers/edit.blade.php ENDPATH**/ ?>