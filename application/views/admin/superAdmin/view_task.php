<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>

        </div>


       <div class="box-tools" class="pull-right col-md-12" >
            <div class="form-group col-md-2">
                <div>
                    <label>Search By Customer Added Date</label>
                    <select name="date_list" id="date_wise_search_list"  class="form-control">
                        <option value="0">---Select Date---</option>
                        <option value="today">Today</option>
                        <option value="yesterday">Yesterday</option>
                        <option value="svn_days">Last 7 days</option>
                        <option value="fiftn_days">Last 15 Days</option>
                    </select>
                </div>
            </div>
            
            
            <div class="form-group col-md-2">
                <div>
                    <label>Search By Follow -Up Date</label>
                    <select name="followup_list" id="date_wise_followup"  class="form-control">
                        <option value="0">---FolloW-Up---</option>
                        <option value="today_followup">Today</option>
                        <option value="yesterday_followup">Yesterday</option>
                        <option value="svn_days_followup">Last 7 days</option>
                        <option value="fiftn_days_followup">Last 15 Days</option>
                        <option value="next_svn_days_followup">Next 7 Days</option>
                        <option value="next_fiftn_days_followup">Next 15 Days</option>
                        <option value="next_thirty_days_followup">Next 30 Days</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group col-md-2">
                <label>Custom Search By added date</label>
                <button type="buttion" id="custom_srch_customer" class="btn btn-default btn-primary">Custom Search</button>
            </div>
			
			<div class="form-group col-md-2">
                <label>Custom Search for next follow Up</label>
                <button type="buttion" id="custom_srch_next_follow_up" class="btn btn-default btn-primary">Custom Search</button>
            </div>
            

			
		 <div class="form-group">

            <div class="form-group col-md-12">

                <form id="show_custom_srch_for_customer" style="display:none">
                    <div class="col-md-5">
                        <input type="text" required class="form-control" name="date_from" value="" id="date_from"  placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy-mm-dd">
                    </div>
                    <div class="col-md-5">
                        <input type="text" required class="form-control" name="date_to" value="" id="date_to"  placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy-mm-dd">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="submit" class="btn btn-default btn-primary">Submit</button>
                    </div>
                </form>
            </div>
		</div>	
		
		<div class="form-group">

            <div class="form-group col-md-12">

                <form id="show_custom_srch_for_next_follow_up" style="display:none">
                    <div class="col-md-5">
                        <input type="text" required class="form-control" name="date_from" value="" id="date_from"  placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy-mm-dd">
                    </div>
                    <div class="col-md-5">
                        <input type="text" required class="form-control" name="date_to" value="" id="date_to"  placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy-mm-dd">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="submit" class="btn btn-default btn-primary">Submit</button>
                    </div>
                </form>
            </div>
		</div>	
			
			
        <div class="box-tools">

        <div class="box-body" id="default_list" >


            <?php
            if (!empty($deleteSuccessMessage)) {
                ?> 
                <h4><?php echo $deleteSuccessMessage; ?></h4>	  
                <?php
            }
            ?>
            <?php
            if (!empty($createSuccessMessage)) {
                ?>

                <h4><?php echo $createSuccessMessage; ?></h4>	  
                <?php
            }
            ?>
            <?php
            if (!empty($retrieveSuccessMessage)) {
                ?>

                <h4><?php echo $retrieveSuccessMessage; ?></h4>	  
                <?php
            }
            ?>



            <?php
			//echo "hello";
            if (!empty($tasks)) {
                ?>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Name</th> 
                            <!--<th>Email</th> -->
                            <th>Country</th> 
                            <th>Phone</th> 
                            <th>Destination</th> 
							<th>Arrival Date</th>
                            <th>Duration</th>
							<th>No of Kids</th>
							<th>No of Adults</th>
							<th>Hotel Category</th>
							<th>Domain</th> 
                            <th>Source</th> 
                            <!-- <th>Customer Requirement</th> --> 
                            <th>Assign To</th> 
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($tasks as $task) {
//                                     
                            ?>
                            <tr>
                                <td> <a href="<?php echo base_url('admin/comment/showCommentBox/' . $task->id); ?>"><?php echo $task->name; ?> </a></td>

                                <!-- <td> <?php //echo!empty($task->email) ? $task->email : '-'; ?> </td> -->

                                <td> <?php echo!empty($task->country) ? $task->country : '-'; ?> </td>
                                <td> <?php echo!empty($task->phone) ? $task->phone : '-'; ?> </td>
                                <td> <?php echo!empty($task->destination) ? $task->destination : '-'; ?> </td>
								<td> <?php echo!empty($task->arrival_date) ? $task->arrival_date : '-'; ?> </td>
								<td> <?php echo!empty($task->duration) ? $task->duration : '-'; ?> </td>
								
								<td> <?php echo!empty($task->no_of_kids) ? $task->no_of_kids : '-'; ?> </td>
								<td> <?php echo!empty($task->no_of_adults) ? $task->no_of_adults : '-'; ?> </td>
								<td> <?php echo!empty($task->hotel_category) ? $task->hotel_category : '-'; ?> </td>
								
                                <td> <?php echo!empty($task->domain) ? $task->domain : '-'; ?> </td>
                                <td> <?php echo!empty($task->source) ? $task->source : '-'; ?> </td>
                                <!-- <td> <?php //echo!empty($task->customer_requirement) ? $task->customer_requirement : '-'; ?> </td> -->




                                <td>
                                    <?php
                                    if (!empty($task->assign_to) && $task->user_type == 'exe') 
									{
                                        echo $task->assigned_employee_name." (Executive)";
                                    } 
									else if (!empty($task->assign_to) && $task->user_type == 'mgr') 
									{
                                        echo $task->assigned_employee_name." (Manager)";
                                    } 
									else 
									{
                                        echo '-';
                                    }
									?> 
                                </td>


                                <td> 
                                    <a href="<?php echo base_url('admin/superAdmin/edit-task/' . $task->id); ?>">Edit / </a> 
                                    <a href="<?php echo base_url('admin/superAdmin/delete-task/' . $task->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')"> Delete </a>
                                    <?php
                                    if (!empty($retrievedTask)) {
                                        ?>
                                        <a href="<?php echo base_url('admin/superAdmin/retrieve-task/' . $task->id) ?>" onclick="return confirm('Are You Sure You Want To retrieved task')"> /Retrieved </a>
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
            } else {
                ?>
                <div class="box-body">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">�</button>
                        <h4><i class="icon fa fa-info"></i> Alert!</h4>
                        No Record Found.
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
        <!-- end /.box-body -->
        <div class="box-body" id="date_wise_list">
        </div>
    </div>






    <!-- /.box-body -->

    <div class="box-footer">

    </div>
    <!-- /.box-footer-->
</section>

<!-- /.box -->
<script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
<!-- /.content -->
 <script>
        $(function () {                 // custom search for customer

            $("#show_custom_srch_for_customer").submit(function (event) {

                //            if ($(this).valid()) {
                event.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url("admin/superAdmin/customer_by_date"); ?>",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $("#default_list").hide();
                        $("#date_wise_list").html(response);

                    }

                });
            });
            //            }
        });
		
		
		    $(function () {               // custom search for next follow up

            $("#show_custom_srch_for_next_follow_up").submit(function (event) {

                //            if ($(this).valid()) {
                event.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url("admin/superAdmin/custom_srch_next_followup"); ?>",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $("#default_list").hide();
                        $("#date_wise_list").html(response);

                    }

                });
            });
            //            }
        });



        $('#date_wise_search_list').change(function () {    // Search customer
            var date_str = $(this).val();
            $.ajax({
                url: '<?php echo site_url("admin/superAdmin/customer_by_date_list") ?>/' + date_str,
                success: function (data) {
//                    alert(data);
                    $("#default_list").hide();
                    $("#date_wise_list").html(data);


                }
            });
        });
        
        
        $('#date_wise_followup').change(function () {        // Search Next follow up
            var date_str = $(this).val();
            $.ajax({
                url: '<?php echo site_url("admin/superAdmin/date_wise_followup") ?>/' + date_str,
                success: function (data) {
//                    alert(data);
                    $("#default_list").hide();
                    $("#date_wise_list").html(data);


                }
            });
        });

        
        $("#custom_srch_customer").click(function () {
            $("#show_custom_srch_for_customer").toggle();
			$("#show_custom_srch_for_next_follow_up").hide();
			
        });
		
		$("#custom_srch_next_follow_up").click(function () {
            $("#show_custom_srch_for_customer").hide();
			$("#show_custom_srch_for_next_follow_up").toggle();
			
        });
		
    </script>