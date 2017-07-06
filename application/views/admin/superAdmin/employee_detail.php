<section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <!-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div> -->
		  
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
		
		
        <div class="box-body" id="date_wise_list">
                <table class="table table-responsive">


              <tr>
         <th>Name</th> 
         <th>Email</th> 
         <th>Contact</th> 
        <!--  <th>User Type</th>  -->
    
         <th>Country</th>
         <th>Status</th>
         <th>Created_At
        </tr>

        <?php
             
             foreach ($detail->result()  as $detail) 
             {
                
                
        ?>

           <tr>
                <td><a href="<?php echo base_url('admin/comment/showCommentBox') .'/'.$detail->cst_id ?>"> <?php echo $detail->name ?></a>      </td>

                <td> <?php echo $detail->cst_email ?>      </td>

                <td> <?php echo $detail->cst_email; ?>      </td>
                <td> <?php echo $detail->cst_contact; ?>    </td>
                <!-- <td> <?php // echo $detail->user_type; ?>  </td> -->
                <td> <?php echo $detail->cst_country; ?>    </td>
                <td> <?php echo $detail->active ?>  </td>
                <td> <?php echo $detail->cst_created_at ?>    </td>


                </tr>
                   <!--  <tr>
                        <th class="row">Name</th><td class="row"><?php echo $detail->name ?></td>
                    </tr>

                    <tr>
                        <th class="row">Email</th><td class="row"><?php echo $detail->email ?></td>
                    </tr>

                    <tr>
                        <th class="row">Contact</th><td class="row"><?php echo $detail->contact ?></td>
                    </tr>

                    <tr>
                        <th class="row">User Type</th><td class="row"><?php echo $detail->user_type ?></td>
                    </tr> -->

               
                 <?php          
                         
           }
         ?> 

                </table>
                <!-- /.table -->

        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
	
	<script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
	 <script>
        $(function () {                 // custom search for customer

            $("#show_custom_srch_for_customer").submit(function (event) {

                //            if ($(this).valid()) {
                event.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url("admin/superAdmin/customer_by_date/$emp_id"); ?>",
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
                    url: "<?php echo base_url("admin/superAdmin/custom_srch_next_followup/$emp_id/"); ?>",
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
                url: '<?php echo site_url("admin/superAdmin/customer_by_date_list/$emp_id/") ?>' + date_str , success: function (data) {
                   
                    $("#default_list").hide();
                    $("#date_wise_list").html(data);


                }
            });
        });
        
        
        $('#date_wise_followup').change(function () {        // Search Next follow up
            var date_str = $(this).val();
            $.ajax({
                url: '<?php echo site_url("admin/superAdmin/date_wise_followup/$emp_id/") ?>/' + date_str,
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

