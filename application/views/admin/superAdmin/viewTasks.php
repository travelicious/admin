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
		 <th>Name</th> 
		 <th>Email</th> 
		 <th>Address</th> 
		 <th>Country</th> 
		 <th>Phone</th>
		 <th>Assign To</th>
		 <th>Action</th>

		<?php
		 if(!empty($updateSuccessMessage))
		 {
		?>
		   <h4><?php echo $updateSuccessMessage ?></h4>
        <?php		
		 }
		?>

		
<<<<<<< HEAD
		<table class="table table-responsive">
		 <th>Name</th> <th>Email</th> <th>Address</th> <th>Country</th> <th>Phone</th> <th>Assign To</th> <th>Action</th>
=======

		  
		<table border="1px" style="text-align:center">
		 <th>Name</th> <th>Email</th> <th>Address</th> <th>Country</th> <th>Phone</th> <th>Assign To Manager</th> <th>Assign To Executive</th> <th>Action</th>

>>>>>>> d41f001683e88699acd480f990dea5bb65650453
		 
         

         <?php
           if(!empty($tasks)) 
		   {
		     
			 foreach($tasks as $task)	
			 {
		?>
		      <tr>
			    <td> <a href="<?php echo base_url('admin/comment/showCommentBox/'.$task->id); ?>"><?php echo $task->name; ?> </a></td>
				<td> <?php echo $task->email; ?> </td>
				
				<td> <?php echo $task->address; ?> </td>
				<td> <?php echo $task->country; ?> </td>
			    <td> <?php echo $task->phone; ?> </td>
<<<<<<< HEAD
			    <td> <?php echo (!empty($task->assigned_employee_name)? $task->assigned_employee_name . " (" . $task->employee_user_type . ") " : '-'); ?> </td>
			    <td> <a href="<?php echo base_url('admin/superAdmin/edit') ?>">Edit / </a>
				     <a href="<?php echo base_url('admin/superAdmin/delete') ?>">delete</a>
=======
			    
	
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
		
<td> <a href="<?php echo base_url('admin/superAdmin/edit/'.$task->id); ?>">Edit / </a><a href="<?php echo base_url('admin/superAdmin/delete/'.$task->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')">Delete</a>
>>>>>>> d41f001683e88699acd480f990dea5bb65650453
				</td>
					
			  </tr>
        <?php   		
			 }			 
		   }
		 ?> 		 
		</table>
		
		
		</div>
        <!-- /.box-body -->
<<<<<<< HEAD
       <!--  <div class="box-footer">
          Footer
        </div> -->
=======
        <div class="box-footer">
          
        </div>
>>>>>>> d41f001683e88699acd480f990dea5bb65650453
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->