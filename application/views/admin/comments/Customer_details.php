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
                        <!--<th class="row">Name</th><td class="row"><?php // echo $indv_custmr->name ?></td>-->
                    </tr>

                </table><!-- /.table -->



            </div>
            <!-- /.user-block -->

            <!-- /.box-tools -->
        </div>
        
        <!-- /.box-header -->
        
        <div class="box-body">
            <!--number of comments-->
            <span class="pull-right text-muted"> 2 comments</span>
        </div>
        <!-- /.box-body -->


<!--comment-->
        <div class="box-footer box-comments">
            <div class="box-comment">
                
                <div class="comment-text">
                    <label class="label label-default label-info">Comments</label></br></br>
                    <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
            </div>
            <!-- /.box-comment -->
           
        </div>
        <!-- /.box-footer -->
        <!--comments end-->



        <div class="box-footer">
            <form action="#" method="post">
                <input type="hidden" value="<?php echo $indv_custmr->id ?>" name="task_id"/>
                
                <div class="img-push">
                    <input type="text" class="form-control input-sm" placeholder=" Post Your Comment">
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
</div>

<div class="col-md-2">
    <!-- Box Comment -->
    <div class="box box-widget">
        <div class="box-header with-border">
            <div class="user-block col-md-12">
                <button type="submit" class="btn btn-default btn-info" onclick="show_datepicker();">Next Follow-Up</button>
            </div>
             <div class="form-group col-md-12" id="datepicker_block" style="display: none;">
                 </br>
                <input type="text" class="form-control" name="followup" value="" id="followup"  placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-format="dd/mm/yyyy" >
            </div>
            
            <!-- /.user-block -->

            <!-- /.box-tools -->
        </div>
      
    </div>
    <!-- /.box -->
</div>
<script>
    function show_datepicker(){
        $("#datepicker_block").show();
    }
    
    $('#followup').change(function () {
        var task_id = $(this).val();
        $.ajax({
            url: '<?php echo site_url("") ?>/' ,
            success: function (data) {
//                alert(data);
               
            }
        });
    });
    
</script>