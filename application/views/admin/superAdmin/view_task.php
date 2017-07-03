<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>

        </div>


        <div class="box-tools">
            <div class="form-group col-md-12">
                <select name="date_list" id="date_wise_search_list"  class="form-control">
                    <option value="0">---Select Date---</option>
                    <option value="today">Today</option>
                    <option value="yesterday">Yesterday</option>
                    <option value="svn_days">Last 7 days</option>
                    <option value="fiftn_days">Last 15 Days</option>
                </select>
            </div>
        </div>




        <div class="box-body" id="default_list">


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
            if (!empty($tasks)) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th> 
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
                        foreach ($tasks as $task) {
//                                     
                            ?>
                            <tr>
                                <td> <a href="<?php echo base_url('admin/comment/showCommentBox/' . $task->id); ?>"><?php echo $task->name; ?> </a></td>

                                <td> <?php echo!empty($task->email) ? $task->email : '-'; ?> </td>

                                <td> <?php echo!empty($task->address) ? $task->address : '-'; ?> </td>
                                <td> <?php echo!empty($task->country) ? $task->country : '-'; ?> </td>
                                <td> <?php echo!empty($task->phone) ? $task->phone : '-'; ?> </td>
                                <td> <?php echo!empty($task->destination) ? $task->destination : '-'; ?> </td>
                                <td> <?php echo!empty($task->domain) ? $task->domain : '-'; ?> </td>
                                <td> <?php echo!empty($task->source) ? $task->source : '-'; ?> </td>
                                <td> <?php echo!empty($task->customer_requirement) ? $task->customer_requirement : '-'; ?> </td>




                                <td>
                                    <?php
                                    if (!empty($task->assign_to) && $task->user_type == 'exe') {
                                        echo $task->assigned_employee_name;
                                    } else {
                                        echo '-';
                                    }
                                    ?> 
                                </td>

                                <td>
                                    <?php
                                    if (!empty($task->assign_to) && $task->user_type == 'mgr') {
                                        echo $task->assigned_employee_name;
                                    } else {
                                        echo '-';
                                    }
                                    ?> 
                                </td>  


                                <td> 
                                    <a href="<?php echo base_url('admin/superAdmin/edit-task/' . $task->id); ?>">Edit / </a> 
                                    <a href="<?php echo base_url('admin/superAdmin/delete-task/' . $task->id); ?>" onclick="return confirm('Are You Sure You Want To Delete')"> Delete </a>
                                    <?php
                                    if (!empty($retrieveSuccessMessage)) {
                                        ?>
                                        <a href="<?php echo base_url('admin/superAdmin/retrieve-task/' . $task->id) ?>" onclick="return confirm('Are You Sure You Want To retrieved task')"> Retrieved </a>
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
                                $(function () {

                                    $("#date_wise_search_list").change(function (event) {
                                        event.preventDefault();
                                        var formData = $(this).val();
                                        alert(formData);
                                        $.ajax({
                                            url: "<?php echo base_url('admin/superadmin/customer-by-date-list/'); ?>" + formData,
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            success: function (response) {
                                                alert(response);
                                                $("#default_list").hide();
                                                $("#date_wise_list").html(response);

                                            }
                                        });
                                    });
                                });

</script>
