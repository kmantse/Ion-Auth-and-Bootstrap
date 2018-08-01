<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=isset($title)?$title:'User Management System' ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/AdminLTE.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/style.css">
    <!-- jQuery 2.2.3 -->
    <script src="<?= base_url() ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url('public/plugins/iCheck/square/blue.css'); ?>">

</head>
<body style="background: midnightblue; ">
<div class="container">
    <div class="row">

        <div class="col-md-4 col-md-offset-4 text-center">
            <div class="login-title">

            </div>
            <?php if(isset($message) || validation_errors() !== ''): ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    <?= isset($message)? $message: ''; ?>
                </div>
            <?php endif; ?>
            <div class="form-box">
                <div class="caption">
                    <h4>Sign in to start your session</h4>
                </div>
                <?php echo form_open(site_url('auth/login'), 'class="login-form" '); ?>
                   <div class="form-group has-feedback">
                       <?php echo form_input($identity);?>
                       <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                   </div>
                    <div class="form-group has-feedback">
                        <?php echo form_input($password);?>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
               <div class="row">
                   <div class="col-xs-8">
                       <div class="checkbox iCheck">
                           <?php echo lang('login_remember_label', 'remember');?>
                           <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <?php echo form_submit('submit', lang('login_submit_btn'),['class'=>"btn btn-primary btn-block btn-flat"]);?>
                   </div>
                </div>
                <?php echo form_close(); ?>

                <a href="<?php echo site_url('auth/forgot_password'); ?>">I forgot my password</a><br>

                <a href="<?php echo site_url('auth/register'); ?>" class="text-center">Register a new membership</a>

            </div>
        </div>
    </div>
</div>
</body>

<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?= base_url() ?>public/dist/js/app.min.js"></script>

<script src="<?= base_url()?>public/plugins/iCheck/icheck.min.js "></script>


<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>

<style type="text/css">
    .login-title{
        padding-top: 80px;
    }
    .login-title span{
        font-size: 30px;
        line-height: 1.9;
        display: block;
        font-weight: 700;
    }


    .caption{
        margin-bottom:40px;
    }
    .login-form input[type=text], .login-form input[type=password]{
        margin-bottom:10px;
    }

    .login-form input {
        outline: none;
        display: block;
        width: 100%;
        border: 1px solid #d9d9d9;
        margin: 0 0 20px;
        padding: 10px 15px;
        box-sizing: border-box;
        border-radius: 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        min-height: 40px;
        font-wieght: 400;
        -webkit-transition: 0.3s ease;
        transition: 0.3s ease;
    }
    .form-box{
        position: relative;
        background: #ffffff;
        max-width: 375px;
        width: 100%;
        border-top: 5px solid #33b5e5;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin: auto;
    }

    .login-form input[type=submit]{
        cursor: pointer;
        background: #33b5e5;
        width: 100%;
        border: 0;
        padding: 8px 15px;
        color: #ffffff;
        -webkit-transition: 0.3s ease;
        transition: 0.3s ease;
        border-radius: 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        min-height: 40px;


    }

</style>


</html>