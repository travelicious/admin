    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $page_title ?></h3>

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
        <th>Country</th>
        <th>Phone</th>
         <th>Destination</th>
          <th>Domain</th>
           <th>Customer Requirement</th>
        <th>Assign To</th>


      
               <?php
              foreach($fetch_data->result() as $row)
                {
                   ?>


                  


<tr>

<td><a href="<?php echo base_url('admin/comment/showCommentBox').'/'.$row->id;?>"><?php echo $row->name; ?></a></td>
<td><?php echo $row->email; ?></td>
<td><?php echo $row->country; ?></td>

<td><?php echo $row->phone; ?></td>
<td><?php echo $row->destination; ?></td>
<td><a href="<?php echo $row->domain; ?>"><?php echo $row->domain; ?></a></td>
<td><?php echo $row->customer_requirement; ?></td>
<td><?php echo $row->assigned_employee_name . " (" . $row->employee_user_type . ") ";?></td>



</tr>

<?php
}
?>

        </table>



        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
 