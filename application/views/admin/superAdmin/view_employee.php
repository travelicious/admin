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
		 <tr>
		 <th>Name</th> 
		 <th>Email</th> 
		 <th>Contact</th> 
		 <th>User Type</th> 
		 <th>Address</th>
		 <th>Action</th>

		</tr>

         <?php
		     
			 foreach ($fetch_data->result()  as $fetch)	
			 {
			 	
			 	
		?>


		      <tr>
         <td>
<a href="<?php echo base_url('admin/superAdmin/employee_detail') . '/' . $fetch->id; ?>">                     <?php echo $fetch->name ?> </a> </td>
				<td> <?php echo $fetch->email ?> </td>
				<td> <?php echo $fetch->contact ?> </td>
				<td> <?php echo $fetch->user_type ?> </td>

				<!-- <td>
                  <?php 
				    if(!empty($fetch->assign_to) && $fetch->user_type == 'exe')
					{
				  	  echo $task->assigned_employee_name;			  
					}
					else
					{
					  echo '-';	
					}
				  ?> 
				 </td>  	 -->
				<td> <?php echo $fetch->address ?> </td>

				  
		
<td> <a href="<?php echo base_url('admin/superAdmin/edit_employee/'.$fetch->id); ?>">Edit / </a>

<a href="<?php echo base_url('admin/superAdmin/delete_employee/'.$fetch->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')">Delete</a>
				</td>
					
			  </tr>
        <?php   		
			 			 
		   }
		 ?> 

		</table>
		
		
		</div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->