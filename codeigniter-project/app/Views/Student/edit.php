<!DOCTYPE html>  
<html lang="en">  
<head>  
  <title>Bootstrap Example</title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_style.css'); ?>">
</head>  
<body>  
  
<div class="container">  
  <h2>Add New Student</h2>  
  <form class="form-horizontal" action="<?php echo base_url('/student/update/'.$student['id']); ?>" method="post" name="createForm" id="createForm" enctype="multipart/form-data">  
    <form style="width:300px">  
  <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">Name:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control"  id="name" placeholder="Enter title" name="name" value="<?= $student['name'];?>"> 
       
    </div> 
    </div>   

    <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">Email:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control"  id="email" placeholder="Enter title" name="email" value="<?= $student['email'];?>">  
    
    </div> 
    </div>  

    <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">phone:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control"  id="phone" placeholder="Enter title" name="phone" value="<?= $student['phone'];?>">  
    
    </div> 
    </div>  

    <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">address:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control"  id="address" placeholder="Enter title" name="address"  value="<?= $student['address'];?>">  
 
    </div> 
    </div>  

    <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">Image:</label>  
      <div class="col-sm-10">  
        <input type="file" class="form-control"  id="image" placeholder="Enter title" name="image" >  
        <img src="<?="/uploads/".$student['image']; ?>" height="100px" width="100px" alt="Student-image">
    </div> 
    </div>  

  <div class="form-group">          
      <div class="col-sm-offset-2 col-sm-10">  
        <button type="submit" class="btn btn-primary">Submit</button>  
      </div>  
    </div>  
  </form>  
</div>  

  
</body>  
</html>  
