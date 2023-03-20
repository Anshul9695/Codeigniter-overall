<!DOCTYPE html>
<html>
<head>
<title>Student List</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_style.css'); ?>">
</head>
<body>
<div class="container">
<?php  
  if(!empty($session->getFlashdata('success'))){
  ?>
  <div class="alert alert-primary" role="alert">
   <?php 
   echo $session->getFlashdata('success');
   ?>
  </div>
  <?php  
  }else{
    ?>
    <div class="alert alert-primary" role="alert">
   <?php 
   echo $session->getFlashdata('error');
   ?>
  </div>
  <?php
  }
  ?>
  <div class="row">
    <div class="col-12">
    <a href="<?php echo base_url('/student/create')?>"> <button type="button" class="btn btn-primary">Add New Student</button></a><br/>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone </th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
         
         <?php 
   foreach($student as $students){

   
        ?>
          <tr>
            <th scope="row"><?php echo $students['id']; ?></th>
            <td><?php echo $students['name']; ?></td>
            <td><?php echo $students['email']; ?></td>
            <td><?php echo $students['phone']; ?></td>
            <td><?php echo $students['address']; ?></td>
            <td>
            <img src="<?="/uploads/".$students['image']; ?>" height="100px" width="100px" alt="Student-image">
            </td>
            <td>
            <a href="<?php echo base_url('/student/edit/'.$students['id']); ?>"> <button type="button" class="btn btn-success"><i class="fas fa-edit">Edit</i></button></a>
            <a href="#" onclick="deleteConfirm(<?php echo $students['id']; ?>)"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt">Delete</i></button></a>
            </td>
          </tr>
          <?php
   }
         ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
<script>
  function deleteConfirm(id){
    if(confirm("Are You Sure want to Delete.."))
{
  var val=window.location.href="<?php echo base_url('student/delete'); ?>/"+id;
}

  }
</script>

