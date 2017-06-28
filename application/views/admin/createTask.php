<?php
/**
 * Created by Shahnawaz.
 * User: Shahnawaz
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

<form action="<?php echo base_url('admin/superAdmin/createTask'); ?>" method="post"> 
<label>Name</label>
<input type="text" name="name"/>
<br><br>

<label>Email</label>
<input type="email" name="email"/>
<br><br>

<label>Address</label>
<input type="text" name="address"/>
<br><br>

<label>Country</label>
<input type="text" name="country"/>
<br><br>

<label>Phone</label>
<input type="text" name="phone"/>
<br><br>

<label>Assign to</label>
<input type="radio" name="AssignTo" value="manager"/>
Manager
<input type ="radio" name="AssignTo" value="executive"/>
Executive
<br><br>

<input type="submit" name="Create Task" value="createTask"/>
</form>

<?php $this->load->view('admin/layouts/js'); ?>


</body>
</html>

