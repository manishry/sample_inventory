<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div >
  <a href="<?php echo e(route('product', ['cid'=>$category->id])); ?>"  >
     <h5  class="card-title text-center" style="margin-top:20px; font-size:12px;"><?php echo e($category->name); ?> </h5></a>
     </div>
     </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>