
<div class="col-md-8 col-md-offset-4 text-center">
    <?php if(isset($message) || validation_errors() !== ''): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Alert!</h4>
            <?= isset($message)? $message: ''; ?>
        </div>
    <?php endif; ?>

<div class="form-box">

<?php echo form_open("auth/create_user",'class="login-form"' );?>
    <div class="caption">
        <h3 class="box-title">CREATE USER</h3>
    </div>

      <div class="form-group has-feedback">

            <?php echo form_input($first_name);?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
            <?php echo form_input($last_name);?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>
    <div class="form-group has-feedback">
            <?php echo form_input($company);?>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>

    </div>

    <div class="form-group has-feedback">
            <?php echo form_input($email);?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

    </div>

    <div class="form-group has-feedback">
            <?php echo form_input($phone);?>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>

        </div>

    <div class="form-group has-feedback">
            <?php echo form_input($password);?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback">
            <?php echo form_input($password_confirm);?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
    <?php echo form_submit('submit', lang('create_user_submit_btn'));?>
    </div>

<?php echo form_close();?>

</div>
    </div>
