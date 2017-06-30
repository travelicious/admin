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
		<?php
		  if(!empty($deleteSuccessMessage))
		  {
		?> 
		    <h4><?php echo $deleteSuccessMessage; ?></h4>	  
		<?php  
		  }
		?>
        <?php 		
		  if(!empty($createSuccessMessage))
		  {
	    ?>
          		
  		   <h4><?php echo $createSuccessMessage; ?></h4>	  
        <?php   		
		}
		?>




		 <table class="table table-responsive">
		


		<?php
		 if(!empty($updateSuccessMessage))
		 {
		?>
		   <h4><?php echo $updateSuccessMessage ?></h4>
        <?php		
		 }
		?>

		

		<table class="table table-responsive">
		 <th>Name</th> <th>Email</th> <th>Address</th> <th>Country</th> <th>Phone</th> <th>Destination</th> <th>Domain</th> <th>Source</th> <th>Customer Requirement</th> <th>Assign To Manager</th> <th>Assign To Executive</th> <th>Action</th>

		 
         

         <?php
           if(!empty($tasks)) 
		   {
		     
			 foreach($tasks as $task)	
			 {
		?>
		      <tr>
			    <td> <a href="<?php echo base_url('admin/comment/showCommentBox/'.$task->id); ?>"><?php echo $task->name; ?> </a></td>
				
				<td> <?php echo !empty($task->email)?$task->email:'-'; ?> </td>
				
				<td> <?php echo !empty($task->address)?$task->address:'-'; ?> </td>
				<td> <?php echo !empty($task->country)?$task->country:'-'; ?> </td>
			    <td> <?php echo !empty($task->phone)?$task->phone:'-'; ?> </td>
				<td> <?php echo !empty($task->destination)?$task->destination:'-'; ?> </td>
				<td> <?php echo !empty($task->domain)?$task->domain:'-'; ?> </td>
				<td> <?php echo !empty($task->source)?$task->source:'-'; ?> </td>
				<td> <?php echo !empty($task->customer_requirement)?$task->customer_requirement:'-'; ?> </td>
				
				

			  
				<td>
                  <?php 
				    if(!empty($task->assign_to) && $task->user_type == 'exe')
					{
				  	  echo $task->assigned_employee_name;			  
					}
					else
					{
					  echo '-';	
					}
				  ?> 
				 </td>
                 
				 <td>
                  <?php 
				    if(!empty($task->assign_to) && $task->user_type == 'mgr')
					{
				  	  echo $task->assigned_employee_name;			  
					}
					else
					{
					  echo '-';	
					}
				  ?> 
				 </td>  
				 
		
                <td> <a href="<?php echo base_url('admin/superAdmin/edit/'.$task->id); ?>">Edit / </a><a href="<?php echo base_url('admin/superAdmin/delete/'.$task->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')">Delete</a>
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
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->