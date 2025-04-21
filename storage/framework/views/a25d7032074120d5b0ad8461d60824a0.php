<?php $__env->startSection('content'); ?>
<?php if(session()->has('message')): ?>
  <?php echo e(session()->get('message')); ?>

<?php endif; ?>
    
<form action="<?php echo e(route('carros.update',['carro'=>$carro->id])); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
    
  
      <legend>Editar carro</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Marca</label>
        <input type="text" id="disabledTextInput" name="marca" class="form-control" value="<?php echo e($carro->marca); ?>">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Modelo</label>
        <input type="text" id="disabledTextInput" name="modelo" class="form-control" value="<?php echo e($carro->modelo); ?>">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Ano</label>
        <input type="text" id="disabledTextInput" name="ano" class="form-control" value="<?php echo e($carro->ano); ?>">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Cor</label>
        <input type="text" id="disabledTextInput" name="cor" class="form-control" value="<?php echo e($carro->cor); ?>">
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
   

  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pelad\Documents\projetos\Crud_Laravel\resources\views/carros_edit.blade.php ENDPATH**/ ?>