<?php $__env->startSection('content'); ?>
    <div class="container">
            
        <div class="body-section col-md-12">

            <button class="btn btn-primary"><a style="text-decoration:none; color:#fff;" href="#"> Add Product </a></button>
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
             <th>Action</th>
             <tbody>
             
             
                <tr>
                   <td>1</td>
                   <td>Test</td>
                    <td>
                   <a href="#" class="btn btn-sm btn-primary">Edit</a>

                     <a href="#" class="btn btn-sm btn-danger">Del</a>
                   </td>
                </tr>

               
             </tbody>
          </table>
     </div>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>