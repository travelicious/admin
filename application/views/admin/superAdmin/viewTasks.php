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
		
		<table class="table table-responsive">
		 <th>Name</th> <th>Email</th> <th>Address</th> <th>Country</th> <th>Phone</th> <th>Assign To</th> <th>Action</th>
		 
         
         <?php
           if(!empty($tasks))
		   {
		     foreach($tasks as $task)	
			 {
		?>
		      <tr>
			    <td> <?php echo $task->name; ?> </td>
				<td> <?php echo $task->email; ?> </td>
				
				<td> <?php echo $task->address; ?> </td>
				<td> <?php echo $task->country; ?> </td>
			    <td> <?php echo $task->phone; ?> </td>
			    <td> <?php echo (!empty($task->assigned_employee_name)? $task->assigned_employee_name . " (" . $task->employee_user_type . ") " : '-'); ?> </td>
			    <td> <a href="<?php echo base_url('admin/superAdmin/edit') ?>">Edit / </a>
				     <a href="<?php echo base_url('admin/superAdmin/delete') ?>">delete</a>
				</td>
					
			  </tr>
        <?php   		
			 }			 
		   }
		 ?> 		 
		</table>
		
		
		</div>
        <!-- /.box-body -->
       <!--  <div class="box-footer">
          Footer
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->