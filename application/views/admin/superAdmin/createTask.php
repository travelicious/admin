<?php
if(!empty($message))
{
  echo $message;	
}
?>

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
          
<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label"></label>
<div class="col-xs-4">
<input type="hidden" name="id" class="form-control" value="<?php echo (!empty($id)?$id:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Name</label>
<div class="col-xs-4">
<input type="text" name="name" class="form-control" required="true" value="<?php echo (!empty($name)?$name:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Email</label>
<div class="col-xs-4">
<input type="email" name="email" class="form-control" required="true" value="<?php echo (!empty($email)?$email:''); ?>"/>
</div></div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Address</label>
<div class="col-xs-4">
<input type="text" name="address" class="form-control" required="true" value="<?php echo (!empty($address)?$address:''); ?>"`/>
</div>
</div>


<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Country</label>
<div class="col-xs-4">
<input type="text" name="country" class="form-control" required="true" value="<?php echo (!empty($country)?$country:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Phone</label>
<div class="col-xs-4">
<input type="text" name="phone" class="form-control" required="true" value="<?php echo (!empty($phone)?$phone:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Destination</label>
<div class="col-xs-4">
<input type="text" name="destination" class="form-control" required="true" value="<?php echo (!empty($phone)?$destination:''); ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Source</label>
<div class="col-xs-4">
<select name="source" class="form-control" required="true" value="<?php echo (!empty($phone)?$destination:''); ?>"/>
  <option>Please Select Source</option>
  <option>Adword...</option>
  <option>Facebook...</option>
</select>
</div>
</div>


<h5 style="color:red">Tick Checkbox If You Want To Assigned Task To Employee OR Untick Otherwise</h5>

<input type="checkbox" name="assign" value="true"/>
<label>Assign to</label>&nbsp;
<input type="radio" name="assignTo" value="manager" onchange="showEmployeeList(event, this)"/>&nbsp;
Manager
&nbsp;<input type ="radio" name="assignTo" value="executive" onchange="showEmployeeList(event, this)"/>&nbsp;
Executive
<br><br>

<select name="managerList" id="managerList" style="display:none">
   <option value="">Select Manager</option>
 <?php 
   if(!empty($managerList))
   {
	 foreach($managerList as $manager)
	 {
    ?>
	   <option value="<?php echo $manager->id ?>" ><?php echo $manager->name ?></option>   
    <?php  	
	 }	 
   }	   
 ?>
</select>

<select id="executiveList" name="executiveList" style="display:none">
   <option value="">Select executive</option>
 <?php 
   if(!empty($executiveList))
   {
	 foreach($executiveList as $executive)
	 {
    ?>
	   <option value="<?php echo $executive->id ?>" ><?php echo $executive->name ?></option>   
    <?php  	
	 }	 
   }	   
 ?>
</select>


<input type="submit" class="btn btn-primary" name="Create Task" value="Create Task"/>
</form>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

<script src="<?php echo base_url('assets/js/superAdmin.js');?> "> </script>








