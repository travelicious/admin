<?php
/**
 * Created by PhpStorm.
 * User: Saket
 * Date: 6/19/2017
 * Time: 3:31 PM
 */
?>
<script type="text/javascript">
    var flag;
    function checktime(){
    var d = new Date();
    if(d.getHours() == 19)
    {
      notification();   
    }    
    }

    function notification()
    {
       $.get("<?php echo base_url('admin/SuperAdmin/notification') ?>", getNotification)
       
       clearInterval(flag);
    }

    function getNotification(data)
    {
     //alert(data);
      /*var data = JSON.parse(data);
      alert(data[0].name +"\n"+ data[1].name);*/
      //document.write(data);
      /*alert(JSON.stringify(data)); 
      alert(data.join(","));*/

      var data = JSON.parse(data);
       for (var i=0; i < data.length; i++) {
            alert("Task Pending"+"\n"+"\n"+data[i].id +"    -   "+ data[i].name );
            //document.write(data[i].id +"    -   "+ data[i].name + "<br>");
        }


     
      
    }
 

    flag = setInterval(checktime,1000);


</script>

<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>admin/dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>CRM</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>CRM</b></span>
        <span></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>




       <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                
                <li class="dropdown notifications-menu">

      
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">3</span>
                    </a>
    
                    <ul class="dropdown-menu">
                        <li>
                         <ul class="menu">

            <?php
             
             foreach ($fetch_notification->result()  as $notification) 
             {
                
                
                 ?>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i>

                                        <?php echo $notification->title; ?>
                                    </a>
                                </li>
                                                             <?php
}
?>


                       
                            </ul>

                        </li>
                        <li class="footer"><a href="#">View all</a></li>

                    </ul>

                </li>

                
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $_SESSION['logged_in']['name'] ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $_SESSION['logged_in']['name'] ?>
                                <!--<small>Member since <?php // echo $user_reg_date; ?></small>-->
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row text-center">
                                
                                <?php echo $_SESSION['logged_in']['email'] ?>
<!--                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>-->
<!--                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>-->
<!--                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>-->
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url();?>admin/signout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
<!--                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
            </ul>
        </div>
    </nav>
</header>
