
<div class="col-md-4 col-md-offset-4 text-center">
    <?php echo $message ? '<div id="infoMessage" class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert"
aria-hidden="true">×</button>'.$message.'</div>' : ''; ?>


    <h2><?php echo $title ?></h2>
    <div class = "form-box">
        <?php echo form_open('auth/change_password','class="login-form"'); ?>
        <div class="form-group has-feedback">
            <?php echo form_input($old_password);?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo form_input($new_password);?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo form_input($new_password_confirm);?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo form_input($user_id);?>
        </div>
        <?php echo form_submit('submit', lang('change_password_submit_btn'),['class'=>"btn btn-primary btn-block btn-flat"]);?>
        <?php echo form_close();?>
    </div>

</div>
<!-- /.login-box-body -->

<!-- /.login-box -->
