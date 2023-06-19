<!DOCTYPE html>
<html>
<head>
    
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">list</a>
</div>
</div>
  <div class="container" style="padding-top;15px;">
  <div class="row">
    <div></div>
  </div class="col-md-12">
  <?php
  $success=$this->session->userdata('success');
  if($success!="")
  {
    ?>
    <div class="alert alert-success"><?php echo $success;?></div>
    <?php
  }
  ?>
  <?php
  $failure=$this->session->userdata('failure');
  if($failure!="")
  {
?>
 <div class="alert alert-success"> <?php echo $failure;?></div>
 <?php
  }
  ?>
  </div>
<div class="container" style="padding-top;15px;"> 
<div class="row">
    <div class="col-md-8">
    <div class="row " style="padding:15px;">
   <div class="col-6" > <h3>view task</h3></div>
    <div class="col-6 text-right" style="justify-content:right;">
      <a href="<?php echo base_url().'User/Create';?>" class="btn btn-secondary">Create Task</a>
    </div>
     </div>
     </div>
     </div>

    
    <hr>
  <div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Task</th>
                
                <th width="70">Edit</th>
                <th width="100">Delete</th>
                </tr>
                <?php if(!empty($users))
                {
                 foreach($users as $user)
                 {?>
                    <tr>
                        
                <td><?php echo $user['user_id']?></td>
                <td><?php echo $user['name']?></td>
                 <td><?php echo $user['task']?></td>
                 
                 <td>
                 <a href="<?php echo base_url().'User/edit/'.$user['user_id']?>"class="btn btn-primary">Edit</a>
                 </td>
                 <td>
                 <a href="<?php echo base_url().'User/delete/'.$user['user_id']?>"class="btn btn-danger">Delete</a>
                 </td>
                    </tr>
                <?php }}
                else{
                    ?>
                    <tr>
                        <td colspan="5">Record not found</td>
                    </tr>
               <?php }?>
                
            
        </table>

    </div>
  </div>
</div>
</body>
</html>