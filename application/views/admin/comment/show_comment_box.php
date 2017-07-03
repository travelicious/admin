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
                    <tr>
                        <th class="row">Destination<td class="row"><?php echo $indv_custmr->destination ?></td>
                    </tr>
                    <tr>
                        <th class="row">Domain<td class="row"><a href="<?php echo $indv_custmr->domain ?>" target="__blank"><?php echo $indv_custmr->domain ?></a></td>
                    </tr>
                    <tr>
                        <th class="row">Customer Requirement<td class="row"><?php echo $indv_custmr->customer_requirement ?></td>
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
                    echo $noOfComment . '&nbsp' . 'Comments';
                }
                ?>
            </span>



        </div>
        <!-- /.box-body -->


        <!--comment-->
        <div class="col-md-3">
            <label class="label label-default label-info">Comments</label></br></br>
        </div>
        <div class="box-footer box-comments"  id="comment_div_post" style=" height:17em; width:64.5em; overflow: auto; box-shadow:  inset 0px 0px 4px #000000;">
            <div class="box-comment">

                <div class="comment-text">


                    <?php
                    if (!empty($allComment)) {
                        foreach ($allComment as $comment) {
                            ?>    <span class="username">
                            <?php if ($comment->name == $_SESSION['logged_in']['name']) { ?>
                                    <label class="label label-default label-success" style="font-size: 12px;"><?php echo $comment->name ?></label>
                                <?php } else { ?>
                                    <label class="label label-default label-primary" style="font-size: 12px;"><?php echo $comment->name ?></label>
                                <?php } ?>

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


            <div class="img-push" >
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
                <button type="submit" class="btn btn-default btn-info" onclick="show_datepicker();">Next Follow-Up</button></br></br>


                <div class="form-group col-md-12" id="datepicker_block" style="display: none;">
                    </br>
                    <form onchange="this.submit()" action="<?php echo base_url("admin/comment/add_next_followup"); ?>" method="post">
                        <input type="hidden" value="<?php echo $indv_custmr->id ?>" name="task_id" />
                        <input type="text" class="form-control" name="followup" value="" id="followup"  placeholder="Select Date" data-provide="datepicker" data-date-autoclose="true" data-date-format="yyyy-mm-dd"  >
                    </form>
                </div>

                <button type="submit" class="btn btn-default btn-success" onclick="finishedModel();">Completed</button></br></br>
                <button type="submit" class="btn btn-default btn-warning" onclick="postponedModel();">Postponed</button></br></br>
                <button type="submit" class="btn btn-default btn-danger" onclick="cancelModel();">Cancel</button></br></br>
               <a href="<?php echo base_url("admin/executive/whatsapp_loader"); ?>" style="text-decoration: none; color: #fff;" class="btn btn-default btn-success"><i class="fa fa-whatsapp fa-2x"></i></a>
                <!-- /.user-block -->

                <!-- /.box-tools -->
            </div>


        </div>
        <!-- /.box -->
    </div>
</div>


<div class="modal fade finished" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <form id="save_finished_comment_Form" action="<?php echo base_url("admin/comment/save_finished_comment_Form");?>" method="post">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Comment For Finished</h4>
                </div>
                <div class="modal-body">
                    <div class="successmsg"></div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>                   
                    <div class="img-push">
                        <input type="hidden" name="id_comment" value="<?php echo $indv_custmr->id ?>"/>
                        <input type="text" class="form-control input-sm" placeholder=" Post Your Comment" name="finished_comment" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade postponed" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <form id="save_finished_comment_Form" action="<?php echo base_url("admin/comment/save_postponed_comment_Form");?>" method="post">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Comment/Reason For Postpond</h4>
                </div>
                <div class="modal-body">
                    <div class="successmsg"></div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>                   
                    <div class="img-push">
                        <input type="hidden" name="id_comment" value="<?php echo $indv_custmr->id ?>"/>
                        <input type="text" class="form-control input-sm" placeholder=" Post Your Comment" name="postpond_comment" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade cancel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <form id="save_finished_comment_Form" action="<?php echo base_url("admin/comment/save_cancel_comment_Form");?>" method="post">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Comment/Reason For Cancel</h4>
                </div>
                <div class="modal-body">
                    <div class="successmsg"></div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>                   
                    <div class="img-push">
                        <input type="hidden" name="id_comment" value="<?php echo $indv_custmr->id ?>"/>
                        <input type="text" class="form-control input-sm" placeholder=" Post Your Comment" name="cancel_comment" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    function show_datepicker() {
        $("#datepicker_block").show();
    }


    function finishedModel() {

        $(".finished").modal('show');
    }
    function postponedModel() {

        $(".postponed").modal('show');
    }
    function cancelModel() {

        $(".cancel").modal('show');
    }

//$('#comment_div_post').scrollTop($('#comment_div_post')[0].scrollHeight);
//$("#comment_div_post").animate({ scrollTop: $('#comment_div_post').prop("scrollHeight")}, 1000);

//$("#comment_div_post").animate({ scrollTop: $('#comment_div_post').prop("scrollHeight")}, 1000);

//$("#comment_div_post").prop("scrollHeight")

</script>
