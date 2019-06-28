<?php $__env->startSection('content'); ?>

<div class="container">
            <div class="card-body">
              <button class="btn btn-success" ><a style=" text-decoration:none; color:#fff;" href="view/category"> View Category </a></button>
                 <center><h1 style="font-weight:bold;"> Choose Category</h1> </center>
            
                 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                    <a href="<?php echo e(route('product', ['cid'=>$category->id])); ?>">
                       <button class="btn btn-info" style="margin-top:30px;"> <h5><?php echo e($category->name); ?> </h5> </button>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
                
                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>