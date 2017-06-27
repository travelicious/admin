<?php
/**
 * Created by PhpStorm.
 * User: Saket
 * Date: 6/19/2017
 * Time: 3:31 PM
 */
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['logged_in']['name'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->





        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="active"><a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
 <!--id 3 = executive-->
            <?php if ($_SESSION['logged_in']['uid'] == 3) { ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Task</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("admin/executive");?>"><i class="fa fa-circle-o"></i> View Task</a></li>
                       
                    </ul>
                </li>
            <?php } ?>
                
                <!--id 2 = manager-->
                 <?php if ($_SESSION['logged_in']['uid'] == 2) { ?>
                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Customer</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> View Customer</a></li>
                       
                    </ul>
                </li>
                
                
                 <?php } ?>
                
                
                <!--id 1  = admin-->
                 <?php if ($_SESSION['logged_in']['uid'] == 1) { ?>
                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Customer</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Add Customer</a></li>
                       
                    </ul>
                </li>
                
                 <?php } ?>









    </section>
    <!-- /.sidebar -->
</aside>
