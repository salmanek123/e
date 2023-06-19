<!DOCTYPE html>
<html>
<head>
    
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Todo App</a>
</div>
</div>
<div class="container" style="padding-top;15px;">
    <h4>Create Task</h4>
    <hr>
    <form method="post" name="CreateTask" action="<?php  echo base_url().'User/create';?>">
    <div class="row">
        <div class="col-md-4">
       <div class="form-group">
            <label>name</label>
            <input type="text" name="name" value="" hint="Enter name" class="form-control">
            <?php echo form_error('name');?>
          </div>
          <div class="form-group">
            <label>Task</label>
            <input type="text" name="task" value=""  hint="Enter Task"class="form-control">
            <?php echo form_error('task');?>
          </div>
          
          <div class="form-group ">
            <br>
            <button class="btn btn-primary">Create</button>
            <a href="" class="btn-secondary btn">Cancel</a>
          </div>
        </div>
    </div>
    </form>
</div>
</body>
</html>