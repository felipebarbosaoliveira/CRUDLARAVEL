<?php $__env->startSection('content'); ?> 
<title>B&Z Solutions</title>

<?php if(session()->has('message')): ?>
  <?php echo e(session()->get('message')); ?>

<?php endif; ?>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<form action="<?php echo e(route('carros.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>   
      <legend>Adicionar Veículo</legend>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Montadora</label>
        <input type="text" id="disabledTextInput" name="marca" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Modelo</label>
        <input type="text" id="disabledTextInput" name="modelo" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Ano de Fabricação</label>
        <input type="text" id="disabledTextInput" name="ano" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Cor do Veículo</label>
        <input type="text" id="disabledTextInput" name="cor" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Confirmar adição do veículo</button>
   

  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pelad\Documents\projetos\Crud_Laravel\resources\views/carros_create.blade.php ENDPATH**/ ?>