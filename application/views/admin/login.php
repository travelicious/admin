<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CRM| Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>CRM</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">


                <?php if ($this->session->flashdata('msg')) { ?>
                    <div class="alert alert-danger"> <?= $this->session->flashdata('msg') ?> </div>
                <?php } ?>
                 <?php if ($this->session->flashdata('no_user')) { ?>
                    <div class="alert alert-danger"> <?= $this->session->flashdata('no_user') ?> </div>
                <?php } ?>



                <p class="login-box-msg">Sign in to start your session</p>

                <form action="<?php echo base_url('admin/login/authenticate'); ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="username">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!--                        <div class="col-xs-8">
                                                    <div class="checkbox icheck">
                                                        <label>
                                                            <input type="checkbox"> Remember Me
                                                        </label>
                                                    </div>
                                                </div>-->
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!--                <div class="social-auth-links text-center">
                                    <p>- OR -</p>
                                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                                        Facebook</a>
                                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                                        Google+</a>
                                </div>-->
                <!-- /.social-auth-links -->

                <a href="#">I forgot my password</a><br>
                <!--<a href="register.html" class="text-center">Register a new membership</a>-->

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
<!--        <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
         Bootstrap 3.3.6 
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
         iCheck 
        <script src="../../plugins/iCheck/icheck.min.js"></script>-->
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
