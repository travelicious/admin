

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo $page_title ?></h3>

        </div>


        <div class="box-body" id="default_list">

            <?php
            if (!empty($customer_cancel_list)) {
                ?>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Country</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($customer_cancel_list as $value) {
//                                     
                            ?>
                            <tr>
                                <td class="mailbox-star"><?php echo ++$i; ?></td>
                                <td class="mailbox-subject"><a href="<?php echo base_url('admin/comment/showCommentBox') . '/' . $value->id; ?>"><b><?php echo $value->name; ?></b></a></td>
                                <td class="mailbox-subject"><b><?php echo $value->email; ?></b></td>
                                <td class="mailbox-subject"><b><?php echo $value->phone; ?></b></td>
                                <td class="mailbox-subject"><b><?php echo $value->country; ?></b></td>

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
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-info"></i> Alert!</h4>
                        No Record Found.
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
        <!-- end /.box-body -->

    </div>
    <!-- /.box-body -->

    <div class="box-footer">

    </div>
    <!-- /.box-footer-->

    <!-- /.box -->
   
    <!-- /.content -->
    
