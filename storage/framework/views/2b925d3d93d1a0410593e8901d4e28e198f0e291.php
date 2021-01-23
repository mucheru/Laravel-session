

<form action="getdepartments" method="get">
    <select class="form-control" id="selectUser" name="user_selected" required focus>
    <option value="" disabled selected>Please select department</option>        
    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($user->id); ?>"><?php echo e($user->department_name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
  </form><?php /**PATH /home/steve/Session-app/resources/views/departmentdetails.blade.php ENDPATH**/ ?>