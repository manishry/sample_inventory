<?php $__env->startSection('content'); ?>
    <div class="container">
            <div class="card-body">
        <h2> Add New Properties</h2>
            <div class="card-body col-md-6">
                <form action="<?php echo e(url('properties/update/' .$properties->id)); ?>" method="POST">
                
                <?php echo csrf_field(); ?>
                   <div class="form-group">
                        <label for="exampleFormControlInput1"> Properties Name * </label>
                      
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="<?php echo e($properties->name); ?>">
                                <div class="" style="color:red"> <?php if($errors->first('name')): ?> <?php echo e($errors->first('name')); ?> <?php endif; ?>
                            </div>
                    </div>
                  

                  <button class="btn btn-primary">Update</button>
                </form>
            </div>

    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>