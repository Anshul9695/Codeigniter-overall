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
  <form class="form-horizontal" method="post" name="createForm" id="createForm" enctype="multipart/form-data">  
    <form style="width:300px">  
  <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">Name:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('name')) ? 'is-invalid':'' ; ?>"  id="name" placeholder="Enter title" name="name" value="<?php echo set_value('name'); ?>"> 
        <?php  
      if(isset($validation) && $validation->hasError('name')){
        echo '<p class="invalid-feedback">'.$validation->getError('name').'</p>';
      }
      ?>  
    </div> 
    </div>   

    <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">Email:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('email')) ? 'is-invalid':'' ; ?>"  id="email" placeholder="Enter title" name="email" value="<?php echo set_value('email'); ?>">  
        <?php  
      if(isset($validation) && $validation->hasError('email')){
        echo '<p class="invalid-feedback">'.$validation->getError('email').'</p>';
      }
      ?> 
    </div> 
    </div>  

    <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">phone:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('phone')) ? 'is-invalid':'' ; ?>"  id="phone" placeholder="Enter title" name="phone" value="<?php echo set_value('phone'); ?>" >  
        <?php  
      if(isset($validation) && $validation->hasError('phone')){
        echo '<p class="invalid-feedback">'.$validation->getError('phone').'</p>';
      }
      ?> 
    </div> 
    </div>  

    <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">address:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('address')) ? 'is-invalid':'' ; ?>"  id="address" placeholder="Enter title" name="address" value="<?php echo set_value('address'); ?>" >  
        <?php  
      if(isset($validation) && $validation->hasError('address')){
        echo '<p class="invalid-feedback">'.$validation->getError('address').'</p>';
      }
      ?> 
    </div> 
    </div>  

    <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">Image:</label>  
      <div class="col-sm-10">  
        <input type="file" class="form-control <?php echo (isset($validation) && $validation->hasError('image')) ? 'is-invalid':'' ; ?>"  id="image" placeholder="Enter title" name="image" value="<?php echo set_value('image'); ?>">  
        <?php  
      if(isset($validation) && $validation->hasError('image')){
        echo '<p class="invalid-feedback">'.$validation->getError('image').'</p>';
      }
      ?> 
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
