<?php
/**
 * Created by PhpStorm.
 * User: Saket
 * Date: 6/19/2017
 * Time: 3:31 PM
 */
?>
<!DOCTYPE html>
<html>
<head>

    <title><?php echo $page_title; ?></title>
    <?php $this->load->view('admin/layouts/css'); ?>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('admin/layouts/header'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view('admin/layouts/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><?php echo $breadcrumb; ?></li>
            </ol>
        </section>

        <!-- Main content -->

        <?php $this->load->view($main_content);//This variable contains the filename of main content section. It is sent from Controller ?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer Here -->
    <?php $this->load->view('admin/layouts/footer'); ?>

    <!-- Control Sidebar Right -->
    <?php $this->load->view('admin/layouts/right_sidebar'); ?>

</div>
<!-- ./wrapper -->

<?php $this->load->view('admin/layouts/js'); ?>


</body>
</html>

