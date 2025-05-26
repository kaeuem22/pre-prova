<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Livewire Styles -->
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Meu Sistema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php echo e(request()->routeIs('categories.*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('categories.index')); ?>">Categorias</a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('products.*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('products.index')); ?>">Produtos</a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('customers.*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('customers.index')); ?>">Clientes</a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('suppliers.*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('suppliers.index')); ?>">Fornecedores</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Livewire Scripts -->
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH C:\Users\Laboratório 3\Desktop\LARAVEL\artisan\example-app\resources\views/layouts/master.blade.php ENDPATH**/ ?>