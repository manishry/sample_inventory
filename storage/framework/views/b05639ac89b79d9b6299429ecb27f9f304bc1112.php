<?php $__env->startSection('content'); ?>
    <div class="container">
            
        <div class="body-section col-md-12">

            <button class="btn btn-primary"><a style="text-decoration:none; color:#fff;" href="chooseCategory"> Add Product </a></button>
            <button class="btn btn-primary" style="margin-left:800px;"><a style="text-decoration:none; color:#fff;" href="<?php echo e(route('properties')); ?>">  Properties </a></button>
            <button class="btn btn-primary" style="margin-right:-850px;"><a style=" text-decoration:none; color:#fff;" href="view/category"> View Category </a></button>
    
     <center>
            <div style="margin-top:50px;">
                <h1> All Products</h1>
            </div>
    </center>
          <table class="table" style="margin-top:10px;"> 
             <th>#</th>
             <th>Product Name</th>
             <th>Category</th>
             <th>Action</th>
             <tbody>
             <?php $id = 1; ?>
             <?php if($product): ?>
             <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                   <td><?php echo e($id++); ?></td>
                   <td><?php echo e($p->name); ?></td>
                   <td><?php echo e($p->categories); ?></td>
                    <td>

                    
                    <a href="<?php echo e(url('view/product-details/' .$p->id )); ?>" class="btn btn-sm btn-info">View Product Details</a>
                    
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