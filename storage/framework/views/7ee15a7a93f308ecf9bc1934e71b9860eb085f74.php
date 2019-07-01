<?php $__env->startSection('content'); ?>

<div class="container"> 
    <div class="card-header" style="text-align:center; font-weight:bold; font-size:18px;">Product Details</div>
        <div class="card-body">
            <div class="table">
                <table class="table">
                
                
                    <tbody>
                     <?php if($productdetails): ?>
                     <?php $__currentLoopData = $productdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="font-weight:bold; font-size:16px;"><?php echo e($pd->label); ?></td>
                            <td><?php echo e($pd->value); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>