
<div class="col-md-8 col-md-offset-4 text-center">
    <?php if(isset($message) || validation_errors() !== ''): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Alert!</h4>
            <?= isset($message)? $message: ''; ?>
        </div>
    <?php endif; ?>
    <div class="form-box">

    <?php echo form_open(uri_string(),'class="login-form"');?>

      <div class="form-group has-feedback">
            <?php echo form_input($first_name);?>
      </div>

      <div class="form-group has-feedback">
            <?php echo form_input($last_name);?>
      </div>

      <div class="form-group has-feedback">
            <?php echo form_input($company);?>
      </div>

      <div class="form-group has-feedback">
            <?php echo form_input($phone);?>
      </div>

      <div class="form-group has-feedback">
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </div>

      <div class="form-group has-feedback">
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>
      </div>

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <div class="form-group has-feedback ">
          <?php foreach ($groups as $group):?>
              <label class="icheckbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>
</div>
      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

         <div class="form-group has-feedback">
          <?php echo form_submit('submit', lang('edit_user_submit_btn'));?>
          </div>

<?php echo form_close();?>

   </div>

    </div>


