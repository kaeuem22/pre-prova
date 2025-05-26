<div>
    <!-- Campo de pesquisa -->
    <input type="text" wire:model.live="search" class="form-control mb-3" placeholder="Pesquisar categorias...">

    <!-- Tabela de categorias filtradas -->
    <div class="table-responsive">
        <table class="table table-striped"> 
            <tr>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($category->description); ?></td>
                <td>
                    <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir essa categoria?')">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </table>
    </div>
</div>
<?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/livewire/category-table.blade.php ENDPATH**/ ?>