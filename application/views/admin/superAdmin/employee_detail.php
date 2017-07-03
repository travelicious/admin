<section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

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
<<<<<<< HEAD
        
=======
         <th>Contact</th> 
        <!--  <th>User Type</th>  -->
    
         <th>Country</th>
         <th>Status</th>
         <th>Created_At
>>>>>>> 0b0c775c1fe1ebe2b1a8cad550181b8942d1f760
        </tr>

        <?php
             
             foreach ($detail->result()  as $detail) 
             {
                
                
        ?>

           <tr>
                <td><a href="<?php echo base_url('admin/comment/showCommentBox') .'/'.$detail->cst_id ?>"> <?php echo $detail->name ?></a>      </td>
<<<<<<< HEAD
                <td> <?php echo $detail->cst_email ?>      </td>
               
=======
                <td> <?php echo $detail->cst_email; ?>      </td>
                <td> <?php echo $detail->cst_contact; ?>    </td>
                <!-- <td> <?php // echo $detail->user_type; ?>  </td> -->
                <td> <?php echo $detail->cst_country; ?>    </td>
                <td> <?php echo $detail->active ?>  </td>
                <td> <?php echo $detail->cst_created_at ?>    </td>
>>>>>>> 0b0c775c1fe1ebe2b1a8cad550181b8942d1f760

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

        
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

