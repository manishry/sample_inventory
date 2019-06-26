<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="card-body">
        <h2> Choose Properties</h2>
            <div class="card-body">
                

                 <form action="<?php echo e(url('add/properties/details')); ?>" method="POST">

                 <?php echo csrf_field(); ?>
                 <input type="hidden" name="cat_id" value="<?php echo e($id); ?>" />
                  <div class="col-md-12">
                  <label for="exampleFormControlSelect2">Select Properties *</label><br>
                  <div class="form-check form-check-inline">
                  <?php if($properties): ?>
                
                  <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input class="form-check-input" name="properties_id[]" value="<?php echo e($p->id); ?>" type="checkbox" id="inlineCheckbox1" <?php echo e((in_array($p->id, $props))?"checked":''); ?> >
                        <label class="form-check-label" for="inlineCheckbox1" style="font-size:18px; line-height:2rem;"> <?php echo e($p->name); ?> </label>
                      
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <br><br>
                
                  
                   <button class="btn btn-primary" type="submit">Get Values</button>
                </form>
            </div>

    </div> 
</div>   




<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    
</script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>