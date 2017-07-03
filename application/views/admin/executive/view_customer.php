

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo $page_title ?></h3>

        </div>

        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
        <?php } ?>


        <div class="box-tools" class="pull-right col-md-6" >
            <div class="form-group col-md-6">
                <div>
                    <select name="date_list" id="date_wise_search_list"  class="form-control">
                        <option value="0">---Select Date---</option>
                        <option value="today">Today</option>
                        <option value="yesterday">Yesterday</option>
                        <option value="svn_days">Last 7 days</option>
                        <option value="fiftn_days">Last 15 Days</option>
                    </select>
                </div>
            </div>


        </div>

        <div class="box-tools" class="pull-left col-md-6">
            <div class="form-group col-md-3">
                <button type="buttion" id="custom_srch" class="btn btn-default btn-primary">Custom Search</button>
            </div>


        </div>

        <div class="box-tools" style="display: none;" id="show_custom_srch">
            <div class="form-group col-md-12">
                <form  id="date_wise_search" id="date_wise_search">
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

        <div class="box-body" id="date_wise_list"></div>

        <div class="box-body" id="default_list">

            <?php
            if (!empty($customer_list)) {
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
                        foreach ($customer_list as $value) {
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
    <script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
    <!-- /.content -->
    <script>
        $(function () {

            $("#date_wise_search").submit(function (event) {

                //            if ($(this).valid()) {
                event.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url("admin/executive/customer_by_date"); ?>",
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


        $('#date_wise_search_list').change(function () {
            var date_str = $(this).val();
            $.ajax({
                url: '<?php echo site_url("admin/executive/customer_by_date_list") ?>/' + date_str,
                success: function (data) {
//                    alert(data);
                    $("#default_list").hide();
                    $("#date_wise_list").html(data);


                }
            });
        });

        
        $("#custom_srch").click(function () {
            $("#show_custom_srch").toggle();
        });
    </script>
