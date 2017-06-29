<<<<<<< HEAD
<?php
/**
 * Created by Shahnawaz.
 * User: Shahnawaz
 * Date: 6/19/2017
 * Time: 3:31 PM
 */
?>
<!DOCTYPE html>
<html>
<head>

    <title><?php echo $page_title; ?></title>
    
    <?php $this->load->view('admin/layouts/css'); ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">

<form action="<?php echo base_url('admin/superAdmin/createTask'); ?>" method="post"> 
=======
   <!-- Main content -->
   
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('admin/superAdmin/createTask'); ?>" method="post"> 

<label>Name</label>
<input type="text" name="name"/>
<br><br>

<label>Email</label>
<input type="email" name="email"/>
<br><br>

<label>Address</label>
<input type="text" name="address"/>
<br><br>

<label>Country</label>
<input type="text" name="country"/>
<br><br>

<label>Phone</label>
<input type="text" name="phone"/>
<br><br>

<label>Assign to</label>
<input type="radio" name="AssignTo" value="manager"/>
Manager
<input type ="radio" name="AssignTo" value="executive"/>
Executive
<br><br>

<select id="managerList" id="managerList" style="display:none">
   <option value="">Select Manager</option>
 <?php 
   if(!empty($managerList))
   {
     foreach($managerList as $manager)
	 {
    ?>
	   <option value="<?php $manager->id ?>" ><?php $manager->name ?></option>   
    <?php  	
	 }	 
   }	   
 ?>
</select>

<select id="executiveList" id="executiveList" style="display:none">
   <option value="">Select executive</option>
 <?php 
   if(!empty($executiveList))
   {
     foreach($executiveList as $executive)
	 {
    ?>
	   <option value="<?php $executive->id ?>" ><?php $executive->name ?></option>   
    <?php  	
	 }	 
   }	   
 ?>
</select>


<input type="submit" name="Create Task" value="createTask"/>
</form>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->










