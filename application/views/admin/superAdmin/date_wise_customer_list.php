<div class="box-body">

    <?php
    if (!empty($list_between_date_range)) {
        ?>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($list_between_date_range as $value) {
//                                     
                    ?>
                    <tr>
                        <td class="mailbox-star"><?php echo ++$i; ?></td>
                        <td class="mailbox-subject"><a href="<?php echo base_url('admin/comment/showCommentBox') . '/' . $value->id; ?>"><b><?php echo $value->name; ?></b></a></td>
                        <td class="mailbox-subject"><b><?php echo $value->email; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->phone; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->address; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->country; ?></b></td>
                    </tr>
                    <?php
                }
                ?>


            </tbody>
        </table><!-- /.table -->
        <?php
    } else if (!empty($today_list)) {
        ?>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Customer Name</th>
                    <th>Email</th>
					<th>Address</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Destination</th>
					<th>Domain</th>
					<th>Source</th>
					<th>Customer Requirement</th>
					<th>Assign To Manager</th>
					<th>Assign To Executive</th>
					<th>Action</th>
					
					
					
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($today_list as $value) {
//                                     
                    ?>
                    <tr>
                        <td class="mailbox-star"><?php echo ++$i; ?></td>
                        <td class="mailbox-subject"><a href="<?php echo base_url('admin/comment/showCommentBox') . '/' . $value->id; ?>"><b><?php echo $value->name; ?></b></a></td>
                        <td class="mailbox-subject"><b><?php echo $value->email; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->address; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->country; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->phone; ?></b></td>
						<td class="mailbox-subject"><b><?php echo $value->Destination; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->Domain; ?></b></td>
					    <td class="mailbox-subject"><b><?php echo $value->Source; ?></b></td>
					    <td class="mailbox-subject"><b><?php echo $value->Customer_requirement; ?></b></td> 
					    <td class="mailbox-subject"><b><?php echo $value->assign_to; ?></b></td>
					    <td> 
				            <a href="<?php echo base_url('admin/superAdmin/edit-task/'.$task->id); ?>">Edit / </a> 
				            <a href="<?php echo base_url('admin/superAdmin/delete-task/'.$task->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')"> Delete </a>
							<?php
							  if(!empty($retrieveSuccessMessage))
							  {
							?>
								<a href="<?php echo base_url('admin/superAdmin/retrieve-task/'.$task->id) ?>" onclick="return confirm('Are You Sure You Want To retrieved task')"> Retrieved </a>
							<?php					
							  }
							?>
				        </td>
					</tr>
                    <?php
                }
                ?>


            </tbody>
        </table><!-- /.table -->


        <?php
    } else if (!empty($yesterday_list)) {
        ?>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Customer Name</th>
                    <th>Email</th>
					<th>Address</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Destination</th>
					<th>Domain</th>
					<th>Source</th>
					<th>Customer Requirement</th>
					<th>Assign To Manager</th>
					<th>Assign To Executive</th>
					<th>Action</th>
					
					
					
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($today_list as $value) {
//                                     
                    ?>
                    <tr>
                        <td class="mailbox-star"><?php echo ++$i; ?></td>
                        <td class="mailbox-subject"><a href="<?php echo base_url('admin/comment/showCommentBox') . '/' . $value->id; ?>"><b><?php echo $value->name; ?></b></a></td>
                        <td class="mailbox-subject"><b><?php echo $value->email; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->address; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->country; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->phone; ?></b></td>
						<td class="mailbox-subject"><b><?php echo $value->Destination; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->Domain; ?></b></td>
					    <td class="mailbox-subject"><b><?php echo $value->Source; ?></b></td>
					    <td class="mailbox-subject"><b><?php echo $value->Customer_requirement; ?></b></td> 
					    <td class="mailbox-subject"><b><?php echo $value->assign_to; ?></b></td>
					    <td> 
				            <a href="<?php echo base_url('admin/superAdmin/edit-task/'.$task->id); ?>">Edit / </a> 
				            <a href="<?php echo base_url('admin/superAdmin/delete-task/'.$task->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')"> Delete </a>
							<?php
							  if(!empty($retrieveSuccessMessage))
							  {
							?>
								<a href="<?php echo base_url('admin/superAdmin/retrieve-task/'.$task->id) ?>" onclick="return confirm('Are You Sure You Want To retrieved task')"> Retrieved </a>
							<?php					
							  }
							?>
				        </td>
					</tr>
                    <?php
                }
                ?>


            </tbody>
        </table><!-- /.table -->



    <?php } else if (!empty($svn_days_list)) { ?>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Customer Name</th>
                    <th>Email</th>
					<th>Address</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Destination</th>
					<th>Domain</th>
					<th>Source</th>
					<th>Customer Requirement</th>
					<th>Assign To Manager</th>
					<th>Assign To Executive</th>
					<th>Action</th>
					
					
					
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($today_list as $value) {
//                                     
                    ?>
                    <tr>
                        <td class="mailbox-star"><?php echo ++$i; ?></td>
                        <td class="mailbox-subject"><a href="<?php echo base_url('admin/comment/showCommentBox') . '/' . $value->id; ?>"><b><?php echo $value->name; ?></b></a></td>
                        <td class="mailbox-subject"><b><?php echo $value->email; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->address; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->country; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->phone; ?></b></td>
						<td class="mailbox-subject"><b><?php echo $value->Destination; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->Domain; ?></b></td>
					    <td class="mailbox-subject"><b><?php echo $value->Source; ?></b></td>
					    <td class="mailbox-subject"><b><?php echo $value->Customer_requirement; ?></b></td> 
					    <td class="mailbox-subject"><b><?php echo $value->assign_to; ?></b></td>
					    <td> 
				            <a href="<?php echo base_url('admin/superAdmin/edit-task/'.$task->id); ?>">Edit / </a> 
				            <a href="<?php echo base_url('admin/superAdmin/delete-task/'.$task->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')"> Delete </a>
							<?php
							  if(!empty($retrieveSuccessMessage))
							  {
							?>
								<a href="<?php echo base_url('admin/superAdmin/retrieve-task/'.$task->id) ?>" onclick="return confirm('Are You Sure You Want To retrieved task')"> Retrieved </a>
							<?php					
							  }
							?>
				        </td>
					</tr>
                    <?php
                }
                ?>


            </tbody>
        </table><!-- /.table -->


    <?php } else if (!empty($fiftn_days_list)) { ?>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Customer Name</th>
                    <th>Email</th>
					<th>Address</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Destination</th>
					<th>Domain</th>
					<th>Source</th>
					<th>Customer Requirement</th>
					<th>Assign To Manager</th>
					<th>Assign To Executive</th>
					<th>Action</th>
					
					
					
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($today_list as $value) {
//                                     
                    ?>
                    <tr>
                        <td class="mailbox-star"><?php echo ++$i; ?></td>
                        <td class="mailbox-subject"><a href="<?php echo base_url('admin/comment/showCommentBox') . '/' . $value->id; ?>"><b><?php echo $value->name; ?></b></a></td>
                        <td class="mailbox-subject"><b><?php echo $value->email; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->address; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->country; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->phone; ?></b></td>
						<td class="mailbox-subject"><b><?php echo $value->Destination; ?></b></td>
                        <td class="mailbox-subject"><b><?php echo $value->Domain; ?></b></td>
					    <td class="mailbox-subject"><b><?php echo $value->Source; ?></b></td>
					    <td class="mailbox-subject"><b><?php echo $value->Customer_requirement; ?></b></td> 
					    <td class="mailbox-subject"><b><?php echo $value->assign_to; ?></b></td>
					    <td> 
				            <a href="<?php echo base_url('admin/superAdmin/edit-task/'.$task->id); ?>">Edit / </a> 
				            <a href="<?php echo base_url('admin/superAdmin/delete-task/'.$task->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')"> Delete </a>
							<?php
							  if(!empty($retrieveSuccessMessage))
							  {
							?> 
								<a href="<?php echo base_url('admin/superAdmin/retrieve-task/'.$task->id) ?>" onclick="return confirm('Are You Sure You Want To retrieved task')"> Retrieved </a>
							<?php					
							  }
							?>
				        </td>
					</tr>
                    <?php
                }
                ?>


            </tbody>
        </table><!-- /.table -->

    <?php } else { ?>

        </br></br></br></br> <div class="box-body">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                No Record Found.
            </div>
        </div>

    <?php } ?>
</div>