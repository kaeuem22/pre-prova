<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1>Cadastrar Usuario</h1>
    <form action="<?php echo e(route('users.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="birth">Nascimento</label>
            <input type="date" class="form-control" name="birth">
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/Users/create.blade.php ENDPATH**/ ?>