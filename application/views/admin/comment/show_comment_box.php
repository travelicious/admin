<!--<link href="<?php echo base_url("assets/datepicker/bootstrap-datepicker.css"); ?>" rel="stylesheet" type="text/css" />-->
<!--<script src="<?php echo base_url("assets/datepicker/bootstrap-datepicker.js"); ?>" type="text/javascript"></script>-->

<div class="col-md-10">
    <!-- Box Comment -->
    <div class="box box-widget">
        <div class="box-header with-border">
            <div class="user-block">
                <table width="40%" class="table table-bordered table-hover table-striped">
                    <tr>
                        <th class="row">Name</th><td class="row"><?php echo $indv_custmr->name ?></td>
                    </tr>

                    <tr>
                        <th class="row">Email</th><td class="row"><?php echo $indv_custmr->email ?></td>
                    </tr>

                    <tr>
                        <th class="row">Address</th><td class="row"><?php echo $indv_custmr->address ?></td>
                    </tr>

                    <tr>
                        <th class="row">Country</th><td class="row"><?php echo $indv_custmr->country ?></td>
                    </tr>

                    <tr>
                        <th class="row">Phone</th><td class="row"><?php echo $indv_custmr->phone ?></td>

                    </tr>
                    <tr>
                        <th class="row">Next Follow-Up<td class="row"><?php echo $indv_custmr->next_followup ?></td>

                       

                    </tr>

                </table><!-- /.table -->



            </div>
            <!-- /.user-block -->

            <!-- /.box-tools -->
        </div>

        <!-- /.box-header -->

        <div class="box-body">
            <!--number of comments-->
            <span class="pull-right text-muted"> 

                <?php
                if (!empty($noOfComment)) {
                    echo $noOfComment.'&nbsp'.'Comments';
                }
                ?>
            </span>

			 
        </div>
        <!-- /.box-body -->


        <!--comment-->
        <div class="box-footer box-comments">
            <div class="box-comment">

                <div class="comment-text">
                    <label class="label label-default label-info">Comments</label></br></br>
                    
					<?php
					  if(!empty($allComment))
					  {
						foreach($allComment as $comment)
						{
				    ?>    <span class="username">
                        <?php
                          echo $comment->name
						?>						
                          <span class="text-muted pull-right"><?php echo $comment->created_date; ?></span>
                    
					      </span><!-- /.username -->
                    
					<?php   
						  echo $comment->comments;
						} 
					  }
					?>
				
				</div>
				
				</div>
                <!-- /.comment-text -->
            </div>
            <!-- /.box-comment -->

        </div>
        <!-- /.box-footer -->
        <!--comments end-->



        <div class="box-footer">

       
            <form action="<?php echo base_url('admin/comment/saveComment'); ?>" method="post">
                <input type="hidden" value="<?php echo $indv_custmr->id ?>" name="task_id"/>
                

                <div class="img-push">
                    <input type="text" class="form-control input-sm" placeholder=" Post Your Comment" name="comment">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-1 box-footer">
                    </br>
                    <button type="submit" class="btn btn-block btn-primary">Post</button>
                </div>

            </form>
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->


<div class="col-md-2">
    <!-- Box Comment -->
    <div class="box box-widget">
        <div class="box-header with-border">
            <div class="user-block col-md-12">
                <button type="submit" class="btn btn-default btn-info" onclick="show_datepicker();">Next Follow-Up</button>
            </div>
            <div class="form-group col-md-12" id="datepicker_block" style="display: none;">
                </br>
                <form onchange="this.submit()" action="<?php echo base_url("admin/comments/add_next_followup");?>" method="post">
                     <input type="hidden" value="<?php echo $indv_custmr->id ?>" name="task_id" />
                    <input type="text" class="form-control" name="followup" value="" id="followup"  placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-format="dd/mm/yyyy"  >
                </form>
            </div>

            <!-- /.user-block -->

            <!-- /.box-tools -->
        </div>


    </div>
    <!-- /.box -->
</div>
<script>
    function show_datepicker() {
        $("#datepicker_block").show();
    }

   

</script>
