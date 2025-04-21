<?php $__env->startSection('content'); ?>
<title>B&Z Solutions</title>

    <form action="<?php echo e(route('carros.destroy',['carro'=>$carro->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <legend>Carro</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Marca</label>
            <input type="text" id="disabledTextInput" name="marca" class="form-control" placeholder="<?php echo e($carro->marca); ?>">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Modelo</label>
            <input type="text" id="disabledTextInput" name="modelo" class="form-control"
                placeholder="<?php echo e($carro->modelo); ?>">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Ano</label>
            <input type="text" id="disabledTextInput" name="ano" class="form-control"
                placeholder="<?php echo e($carro->ano); ?>">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Cor</label>
            <input type="text" id="disabledTextInput" name="cor" class="form-control"
                placeholder="<?php echo e($carro->cor); ?>">
        </div>
        <a href="<?php echo e(route('carros.index')); ?>"><button type="button" class="btn btn-primary">Voltar</button></a>
        <button type="submit" class="btn btn-danger">Excluir</button>


    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pelad\Documents\projetos\Crud_Laravel\resources\views/carros_show.blade.php ENDPATH**/ ?>