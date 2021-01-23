
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<strong><a href="/createDepartment">CreateDepartment</a></strong>
<table id="customers">
  <tr>
    <th>Department</th>
    <th>Created at</th>
  </tr>
  <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>

    <td><?php echo e($department->department_name); ?></td>
    <td><?php echo e($department->created_at); ?></td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tr>
  
</table>

</body>
</html>



<?php /**PATH /home/steve/Session-app/resources/views/viewDepartment.blade.php ENDPATH**/ ?>