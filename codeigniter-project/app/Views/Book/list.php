<!DOCTYPE html>
<html>
<head>
<title>Books List</title>
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
    <a href="<?php echo base_url('/books/create');?>"> <button type="button" class="btn btn-primary">Add New Books</button></a><br/>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">IS Sbn No</th>
            <th scope="col">Author</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
         
         <?php 
         foreach($books as $book){
        ?>
     
          <tr>
            <th scope="row"><?php echo $book['id'];?></th>
            <td><?php echo $book['title'];?></td>
            <td><?php echo $book['issbn_no'];?></td>
            <td><?php echo $book['author'];?></td>
            <td><?php echo $book['created_date'];?></td>
            <td>

            <a href="<?php echo base_url('/books/edit/'.$book['id']);?>"> <button type="button" class="btn btn-success"><i class="fas fa-edit">Edit</i></button></a>
            <a href="#" onclick="confirmDelete(<?php echo $book['id'];?>)"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt">Delete</i></button></a>
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
  function confirmDelete(id){
    // alert(id);
    if(confirm("Are You Sure Want To Delete")){
      path=window.location.href='<?php echo base_url('/books/delete') ?>/'+id;
      // alert(path);
    }
  }
  </script>

