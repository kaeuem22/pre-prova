<div>
<input type="text" wire:model.live="search" class="form-control mb-3" placeholder="Pesquisar produtos...">
<div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Ação</th>
            </tr>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->category->description); ?></td>
                <td><a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir essa categoria?')">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </table>
    </div>
</div>
<?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/livewire/product-table.blade.php ENDPATH**/ ?>