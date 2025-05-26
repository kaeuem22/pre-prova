<div>
<input type="text" wire:model.live="search" class="form-control mb-3" placeholder="Pesquisar fornecedor...">
<div class="table-responsive">
    <table class="table table-striped"> 
        <tr>
            <th>Nome</th>
            <th>Cnpj</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Ação</th>
        </tr>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($supplier->name); ?></td>
            <td><?php echo e($supplier->cnpj); ?></td>
            <td><?php echo e($supplier->phone); ?></td>
            <td><?php echo e($supplier->address); ?></td>
            <td><?php echo e($supplier->district); ?></td>
            <td><?php echo e($supplier->city); ?></td>
            <td><?php echo e($supplier->state); ?></td>
            <td><?php echo e($supplier->zipcode); ?></td>
            <td>
                <a href="<?php echo e(route('suppliers.edit', $supplier->id)); ?>" class="btn btn-warning">Editar</a>
                <form style="display: inline;" action="<?php echo e(route('suppliers.destroy', $supplier->id)); ?>" method="POST">
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
<?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/livewire/supplier-table.blade.php ENDPATH**/ ?>