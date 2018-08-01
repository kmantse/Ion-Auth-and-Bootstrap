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

    <link rel="stylesheet" href="<?php echo base_url()?> assets/admin/plugins/iCheck/square/blue.css">


</head>
<body style="background: #e8e8ea; ">

            <?php $this->load->view($content);?>


</body>

<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?= base_url() ?>public/dist/js/app.min.js"></script>



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
    .form-box{
        position: relative;
        background: #ffffff;
        max-width: 375px;
        width: 100%;
        border-top: 5px solid #33b5e5;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        padding: 30px;
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