
 <!-- Main content -->
   
    <section class="content">


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Edit Employee</h3>

          <h3 class="box-title">Add Employee</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
      <form action="<?php echo base_url('admin/SuperAdmin/save_employee'); ?>" method="post">

          <?php foreach ($fetch_employee_edit->result()  as $fetch);   ?>

<div class="form-group row"> 
<label for="name" class="col-xs-1 col-form-label">Name</label>
<div class="col-xs-4">
<input type="text" name="name" class="form-control" value="<?php echo $fetch->name; ?>" />
<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $fetch->id; ?>">
</div>
</div>
      
<div class="form-group row"> 
<label for="email" class="col-xs-1 col-form-label">Email</label>
<div class="col-xs-4">
<input type="email" name="email" class="form-control" value="<?php echo $fetch->email; ?>"/>
</div>
</div>

<div class="form-group row"> 
<label for="contact" class="col-xs-1 col-form-label">Contact</label>
<div class="col-xs-4">
<input type="text" name="contact" class="form-control" value="<?php echo $fetch->contact; ?>"/>
</div>
</div>



<div class="form-group row"> 
<label for="user type" class="col-xs-1 col-form-label">User Type</label>
<div class="col-xs-4">
<select name="user_type" class="form-control">
<option>Please Select</option>
<option value="mgr">Manager</option>
<option value="exe">Executive</option>
<option value="adm">Admin</option>

</select>
</div>
</div>

<div class="form-group row"> 
<label for="address" class="col-xs-1 col-form-label">Address</label>
<div class="col-xs-4">
<input type="text" name="address" class="form-control" value="<?php echo $fetch->address; ?>"/>
</div>
</div>

<br>
<div class="form-group row">
<div class="col-xs-4"> 
<input type="submit" name="save" class="btn btn-primary" value="Save"/>
</div>
</div>

</form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->


    </section>

    <!-- /.content -->


