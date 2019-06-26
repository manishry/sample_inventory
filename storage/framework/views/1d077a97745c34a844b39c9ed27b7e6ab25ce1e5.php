<?php $__env->startSection('content'); ?>
    <div class="container">
            
             <div class="body-section col-md-6">
     <button class="btn btn-primary"><a style="text-decoration:none; color:#fff;" href="add/properties"> Add Properties </a></button>
      <button class="btn btn-primary"><a style="text-aline:right; text-decoration:none; color:#fff;" href="view/category"> View Category </a></button>
          <table class="table" style="margin-top:10px;"> 
             <th>#</th>
             <th>Properties Name</th>
             <th>Action</th>
             <tbody>
             <?php $i=1; ?>
             <?php if($properties): ?>
             <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                   <td><?php echo e($i++); ?></td>
                   <td><?php echo e($p->name); ?></td>
                    <td>
                   <a href="<?php echo e(url('properties/edit/' .$p->id)); ?>" class="btn btn-sm btn-primary">Edit</a>

                     <a href="<?php echo e(url('properties/del/' .$p->id)); ?>" class="btn btn-sm btn-danger">Del</a>
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