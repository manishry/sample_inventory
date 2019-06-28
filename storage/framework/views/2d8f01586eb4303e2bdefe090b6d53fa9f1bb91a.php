<?php $__env->startSection('content'); ?>
<div class="container">


 <div class="body-section col-md-12">
     <center>
        <h1>All Categories</h1>
    </cetnte>
    <br>
     <button class="btn btn-primary" style="margin-left:-900px;"><a style="text-aline:right; text-decoration:none; color:#fff;" href="<?php echo e(route('add')); ?>"> Add Category </a></button>
          <table class="table" style="margin-top:20px;"> 
             <th>#</th>
             <th>Category Name</th>
             <th>Action</th>
             <tbody>
             <?php $i=1; ?>
             <?php if($category): ?>
             <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                   <td><?php echo e($i++); ?></td>
                   <td><?php echo e($c->name); ?></td>
                    <td>
                        <a href="<?php echo e(url('set/properties/' .$c->id)); ?>" class="btn btn-sm btn-primary">Set Properties</a>
                        <a href="<?php echo e(url('edit/category/' .$c->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="<?php echo e(url('del/category/' .$c->id)); ?>" class="btn btn-sm btn-danger">Del</a>
                   </td>
                </tr>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
             </tbody>
          </table>
     </div>
  
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>