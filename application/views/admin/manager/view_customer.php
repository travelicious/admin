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
        <th>Address</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Assign To</th>


      
               <?php
              foreach($fetch_data->result() as $row)
                {
                   ?>


                  


<tr>

<td><?php echo $row->name; ?></td>
<td><?php echo $row->email; ?></td>
<td><?php echo $row->address; ?></td>
<td><?php echo $row->country; ?></td>

<td><?php echo $row->phone; ?></td>
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
 