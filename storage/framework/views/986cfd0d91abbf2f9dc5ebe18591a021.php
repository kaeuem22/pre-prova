<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="text-center">Categorias</h1>
    <div class="text-right">
        <a href="<?php echo e(route('users.create')); ?>"
        class="btn btn-primary">Adicionar Categoria</a>
    </div>
</div>
<table class="table table-striped"> 
    <tr>
        <th>Descrição</th>
        <th>Ação</th>
    </tr>
    <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($user->nome); ?></td>
        <td><a href="<?php echo e(route('users.edit', $user->id)); ?>" 
            class="btn btn-warning">Editar</a>
        <form style="display: inline;" action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger"
            onclick="return confirm('Tem certeza que deseja excluir esse usuario?')">
                Excluir
            </button>
        </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/Users/index.blade.php ENDPATH**/ ?>