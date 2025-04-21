

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h1 class="mb-4">Usuários</h1>
        
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary mb-3">Adicionar Novo Usuário</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>Nome</th>
                    <th>Email</th>                   
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr> 
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pelad\Documents\projetos\Crud_Laravel\resources\views/users/index.blade.php ENDPATH**/ ?>