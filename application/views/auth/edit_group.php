
<div class="col-md-8 col-md-offset-4 text-center">
    <?php if(isset($message) || validation_errors() !== ''): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Alert!</h4>
            <?= isset($message)? $message: ''; ?>
        </div>
    <?php endif; ?>
    <div class="form-box">
<?php echo form_open(current_url(), 'class="login-form"' );?>
        <div class="caption">
            <h3 class="box-title">Edit Group</h3>
        </div>
      <div class="class="form-group has-feedback"">
            <?php echo form_input($group_name);?>
      </div>

      <div class="class="form-group has-feedback"">
            <?php echo form_input($group_description);?>
      </div>

      <div class="class="form-group has-feedback"">
          <?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>
      </div>

<?php echo form_close();?>

    </div>
    </div>
