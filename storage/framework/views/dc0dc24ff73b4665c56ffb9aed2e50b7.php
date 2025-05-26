<div>
<input type="text" wire:model.live="search" class="form-control mb-3" placeholder="Pesquisar cliente...">
<div class="table-responsive">
    <table class="table table-striped"> 
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($customer->name); ?></td>
            <td><?php echo e($customer->phone); ?></td>
            <td>
                <a href="<?php echo e(route('customers.edit', $customer->id)); ?>" class="btn btn-warning">Editar</a>
                <form style="display: inline;" action="<?php echo e(route('customers.destroy', $customer->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esse cliente?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </table>
</div>
</div>
<?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/livewire/customer-table.blade.php ENDPATH**/ ?>