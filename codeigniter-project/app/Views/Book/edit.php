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
  <h2>Edit Your Book</h2>  
  <form class="form-horizontal" method="post" name="createForm" id="createForm" action="<?php echo base_url('books/edit/'.$book['id'])?>">  
    <form style="width:300px">  
  <div class="form-group" >  
      <label class="control-label col-sm-2" for="title">Title:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('title')) ? 'is-invalid':'' ; ?>" id="title" placeholder="Enter title" name="title" value="<?php echo set_value('title',$book['title']); ?>">  
        <?php  
      if(isset($validation) && $validation->hasError('title')){
        echo '<p class="invalid-feedback">'.$validation->getError('title').'</p>';
      }
      ?> 
    </div> 
    </div> 
    <div class="form-group">  
      <label class="control-label col-sm-2" for="author">Author:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('author')) ? 'is-invalid':'' ; ?>" id="author" placeholder="Enter author" name="author" value="<?php echo set_value('author',$book['author']); ?>">  
        <?php  
      if(isset($validation) && $validation->hasError('author')){
        echo '<p class="invalid-feedback">'.$validation->getError('author').'</p>';
      }
      ?> 
    </div> 
    
    </div> 

    <div class="form-group">  
      <label class="control-label col-sm-2" for="issbn_no">Is Sbn No:</label>  
      <div class="col-sm-10">  
        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('issbn_no')) ? 'is-invalid':'' ; ?>" id="issbn_no" placeholder="Enter issbn_no" name="issbn_no" value="<?php echo set_value('issbn_no',$book['issbn_no']); ?>">  
        <?php  
      if(isset($validation) && $validation->hasError('issbn_no')){
        echo '<p class="invalid-feedback">'.$validation->getError('issbn_no').'</p>';
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
