<?php $__env->startSection('content'); ?>
 <form action="<?php echo e(route('storeproduct')); ?>" method="POST">

    <div class="container">
            <div class="card-body">
        <h2> Add New Product</h2>
            <div class="card-body col-md-6">
                           
                <?php echo csrf_field(); ?>
                   <div class="form-group">
                        <label for="exampleFormControlInput1"> Product Name * </label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
                                <div class="" style="color:red"> <?php if($errors->first('name')): ?> <?php echo e($errors->first('name')); ?> <?php endif; ?>
                            </div>
                    </div>
                  
                 

                    <div class="body">
               <label for="image">Properties</label>
               <input type="hidden" name="category_id" value="<?php echo e($category_id); ?>" >
                    <?php $__currentLoopData = $props; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="form-group">
                       <label><?php echo e($p->name); ?></label>
                       <input type="hidden" class="form-control" name="label[]" value="<?php echo e($p->name); ?>">
                       <input type="text" class="form-control" name="value[]" value="">
                       </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
      </div>

    <input type="submit" value="submit"/>
                </form>
            </div>

    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>