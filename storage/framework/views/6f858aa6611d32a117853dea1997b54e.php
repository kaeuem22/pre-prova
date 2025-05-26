<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="text-center">Produtos</h1>
    <div class="text-right">
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Adicionar Produto</a>
    </div>
   
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('product-table', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1322744365-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/products/index.blade.php ENDPATH**/ ?>