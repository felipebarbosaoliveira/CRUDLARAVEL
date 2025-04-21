<?php $__env->startSection('content'); ?>
<title>B&Z Solutions</title>

<table class="table">
    <thead class="thead-dark">
      <tr>
        
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Ano</th>
        <th scope="col">Cor</th>
        <th scope="col"></th>
        
        
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $carros_tb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
    <td><?php echo e($carro->marca); ?></td>
    <td><?php echo e($carro->modelo); ?></td>
    <td><?php echo e($carro->ano); ?></td>
    <td><?php echo e($carro->cor); ?></td>
    <td class="d-flex gap-2">
        <a href="<?php echo e(route('carros.edit', ['carro' => $carro])); ?>">
            <button type="button" class="btn btn-primary btn-sm">Editar veículos</button>
        </a>
        <a href="<?php echo e(route('carros.show', ['carro' => $carro])); ?>">
            <button type="button" class="btn btn-primary btn-sm">Detalhes</button>
        </a>
    </td>
</tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pelad\Documents\projetos\Crud_Laravel\resources\views/carros.blade.php ENDPATH**/ ?>