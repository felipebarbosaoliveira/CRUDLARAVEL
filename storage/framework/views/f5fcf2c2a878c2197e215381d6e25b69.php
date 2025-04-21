
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>B&Z Solutions</title>
</head>


<body>
    <div class="container" style="margin-bottom: 10px;">
    <div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            
            <li class="nav-item" >
                <a href="<?php echo e(route('home')); ?>" class="nav-link <?php if(request()->routeIs('home')): ?> active <?php endif; ?>">
                    <i class="bi bi-house-door"></i> Início
                </a>
            </li>
            
            <li class="nav-item">
                <a href="<?php echo e(route('carros.index')); ?>" class="nav-link <?php if(request()->routeIs('carros.index')): ?> active <?php endif; ?>">
                    <i class="bi bi-car-front"></i> Veículos Disponíveis
                </a>
            </li>
            
            <li class="nav-item">
                <a href="<?php echo e(route('carros.create')); ?>" class="nav-link <?php if(request()->routeIs('carros.create')): ?> active <?php endif; ?>">
                    <i class="bi bi-plus-circle"></i> Adicionar Veículos
                </a>
            </li>
            <li class="nav-item">
        <a href="<?php echo e(route('users.index')); ?>" class="nav-link <?php if(request()->routeIs('users.index')): ?> active <?php endif; ?>">
            <i class="bi bi-people"></i> Usuários
        </a>
    </li>

    <li class="nav-item">
        <a href="<?php echo e(route('users.create')); ?>" class="nav-link <?php if(request()->routeIs('users.create')): ?> active <?php endif; ?>">
            <i class="bi bi-person-plus"></i> Novo Usuário
        </a>
    </li>
        </ul>
    </header>
</div>

      <?php echo $__env->yieldContent('content'); ?>
      
        
    </div>
</body>

</html>


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"><?php /**PATH C:\Users\pelad\Documents\projetos\Crud_Laravel\resources\views/layout.blade.php ENDPATH**/ ?>