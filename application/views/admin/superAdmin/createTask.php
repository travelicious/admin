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
		  <input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>"/>
<label>Name</label>
<input type="text" name="name" required="true" value="<?php echo (!empty($name)?$name:''); ?>"/>
<br><br>

<label>Email</label>
<input type="email" name="email" required="true" value="<?php echo (!empty($email)?$email:''); ?>"/>
<br><br>

<label>Address</label>
<input type="text" name="address" required="true" value="<?php echo (!empty($address)?$address:''); ?>"`/>
<br><br>

<label>Country</label>
<input type="text" name="country" required="true" value="<?php echo (!empty($country)?$country:''); ?>"/>
<br><br>

<label>Phone</label>
<input type="text" name="phone" required="true" value="<?php echo (!empty($phone)?$phone:''); ?>"/>
<br><br>

<h5 style="color:red">Tick checkbox if you want to assigned task to employee or untick otherwise</h5>
<input type="checkbox" name="assign" value="true"/>
<label>Assign to</label>
<input type="radio" name="assignTo" value="manager" onchange="showEmployeeList(event, this)"/>
Manager
<input type ="radio" name="assignTo" value="executive" onchange="showEmployeeList(event, this)"/>
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


<input type="submit" name="Create Task" value="createTask"/>
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








